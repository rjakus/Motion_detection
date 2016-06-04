@extends('layouts.app')

@section('content')

<!-- Page container -->
<div class="page-container">

    <!-- Page content -->
    <div class="page-content">
        <div class="page-content-inner">
            <!-- Page header -->
            <div class="page-header">
                <div class="page-title">
                    <h3>Detected motion data report</h3>
                </div>
            </div>
            <!-- /page header -->

            <!-- Page tabs -->
            <div class="tabbable page-tabs">
                <div class="tab-content">
                    <!-- Media datatable -->
                        <div class="panel panel-default">
            
                            <div class="datatable-media">
                                <table class="table table-bordered table-striped">
                                    <thead>
                                        <tr>
                                            <th class="image-column">Image</th>
                                            <th>Description</th>
                                            <th>Date</th>
                                            <th class="actions-column">Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($images as $image)
                                        <tr>
                                            <td class="text-center">
                                                <a href="{{ URL::to('../public/images/motion/' . $image->img_name) }}" class="lightbox"><img src="{{ URL::to('../public/images/motion/' . $image->img_name) }}" alt="" class="img-media"></a>
                                            </td>
                                            <td>There is a {{ 100 * $image->percentage }} percent chance of {{ $image->description }} on the image</td>
                                            <td>{{ date('G:i:s j/n/Y', strtotime($image->created_at)) }}</td>
                                            <td class="text-center">
                                            <a href="{{URL::action('ImageController@destroy',['id'=>$image->id]) }}" 
onclick=" return confirm('Are you sure you want to delete this?')"><i class="icon-remove4"></i> Remove image</a>  
                                            </td>
                                        </tr>
                                        
                                        @endforeach
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    <!-- /media datatable -->
                </div>
            </div>
            <!-- /page tabs -->
        </div>

    </div>
    <!-- /page content -->

</div>
<!-- /page container -->

<script>
    $(document).ready(
            function() {
                setInterval(function() {
                    $('.datatable-media');
                }, 300);
            });
</script>   

@endsection
