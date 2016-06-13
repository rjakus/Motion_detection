# -*- coding: utf-8 -*-

import argparse
import base64
import mysql.connector
import time

from apiclient.discovery import build
from httplib2 import Http
from oauth2client import file, client, tools


parser = argparse.ArgumentParser()
parser.add_argument("input", help="Input image directory to get details")
args = parser.parse_args()

SCOPES = 'https://www.googleapis.com/auth/cloud-platform'
CLIENT_SECRET = '/home/websites/motion/public/py/client_secret.json'

inputfile = args.input 
#/home/websites/motion/public/images/motion//02-04062016182321-03.jpg
img_name = inputfile[44:]
inputfile = "/home/websites/motion/public/images/motion/" + inputfile[44:]
#print inputfile

store = file.Storage('/home/websites/motion/public/py/storage.json')
creds = store.get()
   
if not creds or creds.invalid:
    flow = client.flow_from_clientsecrets(CLIENT_SECRET, SCOPES)
    creds = tools.run_flow(flow, store)
        
SERVICE = build('vision', 'v1', http=creds.authorize(Http()))
                              
with open(inputfile, 'rb') as image:
    image_content = base64.b64encode(image.read())
    service_request = SERVICE.images().annotate(body={
            'requests': [{
                'image': {
                    'content': image_content.decode('UTF-8')
                },
                'features': [{
						"type":"LABEL_DETECTION",
  						"maxResults": 10
  					}]
            }]
        })
    response = service_request.execute()
    
    #print response['responses'][0]['labelAnnotations'][i]['description']    
        
    cnx = mysql.connector.connect(user='root', password='',
                              host='127.0.0.1',
                              database='motion')
    cursor = cnx.cursor()
    add_info = ("INSERT INTO images "
               "(img_name, description, percentage, created_at) "
               "VALUES (%s, %s, %s, %s)")
               
    now = time.strftime('%Y-%m-%d %H:%M:%S')
    data_info = (img_name, response['responses'][0]['labelAnnotations'][0]['description'], response['responses'][0]['labelAnnotations'][0]['score'], now)

    cursor.execute(add_info, data_info)
    cnx.commit()
        
    cursor.close()
    cnx.close()
    
    cnx.close()

print "Image inserted in the db"
