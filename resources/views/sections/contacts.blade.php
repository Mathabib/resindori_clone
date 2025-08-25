@extends('layouts.app')

@section('content')
    <style>
        .page-title{
            text-align: center;
        }

        .page-title{
            text-align: center;
        }
        *{
            /* border: solid red; */
        }
    </style>

 <h3 class="page-title">Contact Us</h3>
 <hr>

<div class="row">
    
    <div class="col-5 kiri">
        <h4>
            Contact Us
        </h4>
        <div class="address">
            108 St Georges Terrace Level 25, Palace Tower Perth, 108 St Georges Terrace sPerth, WA 6000, Australia
        </div>
        <div class="contact">
            <table>
                <tr>
                    <td style="width: 80px;">Email</td>
                    <td>simon.birch@resergy.com</td>
                </tr>
                <tr>
                    <td></td>
                    <td>indah.nursanti@resergy.com</td>
                </tr>
                <tr>
                    <td>Number</td>
                    <td>08xxxxxxxxxx</td>
                </tr>
            </table>
        </div>
    </div>
    <div class="col-1"></div>
    <div class="col-6 kanan">
        <h4>
            Our Locations
        </h4>
        <div>
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d211.57730235290828!2d115.85693045628621!3d-31.954470948389982!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2a32bad5c38f0b55%3A0xcfdc598c30ea07c0!2sThe%20Executive%20Centre%20-%20Palace%20Tower%20(108%20St%20Georges%20Terrace)!5e0!3m2!1sen!2sid!4v1756089204364!5m2!1sen!2sid" width="100%" height="400" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
        </div>
    </div>
</div>


@endsection
