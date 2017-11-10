@extends('site._layouts.default')

@section('main')

        <div class="row-fluid">
            <div class="span3">
                
                @include('site.producer._partials.left_menu')

            </div>
            
            <div class="span8">
                

                <h1>Staff Contact Listings</h1>

                <p><strong>Download the Hallmark Aerospace Staff Listing:</strong> <a href="{{ URL::to('download-form/' . $form->pdf) }}"><i class="ic-pdf"></i></a></p>

                <table class="table table-hover table-striped">

                    <tr><th>Name</th><th>Department</th><th>Phone</th><th>Email</th></tr>
                    
                    @foreach ($contacts as $contact)

                    <tr>
                        <td>{{ $contact->name }}</td>
                        <td>{{ $contact->department }}</td>
                        <td>{{ $contact->phone }}</td>
                        <td>{{ $contact->email }}</td>
                    </tr>

                    @endforeach

                </table>

                
            </div>
            
            
        </div>


@stop