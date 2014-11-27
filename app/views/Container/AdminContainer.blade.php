@extends('Template.Front')

@section('head')
@include('Utilities.Topbar.Topbar')
@endsection

@section('body')
@include('Fields.Admin.admin')
@endsection

@section('scripts')
<script>

    $(document).ready(function() {
		$("tr").click(function(){
		   window.location = "example.html";
		 });
    	//
	    $.getJSON("retApp",function(data) {
	        $('#example1').dataTable({
				"aaData": data,

				//DISPLAYS THE VALUE
				//sTITLE - HEADER
				//MDATAPROP - TBODY
				"aoColumns": 
				[
	        		{"sTitle": "#", "mDataProp": "id"},
	        		{"sTitle": "Name", "sWidth": "267px", "mDataProp": "firstname"},
	        		{"sTitle": "Applicant ID", "mDataProp": "applicant_id"},
	        		{"sTitle": "Date Applied", "mDataProp": "dateofapplication"}
	        	],
	        	"aoColumnDefs": 
	        	[
	        		//FORMAT THE VALUES THAT IS DISPLAYED ON mDataProp
	        		//ID
					{
						"aTargets": [ 0 ], // Column to target
						"mRender": function ( data, type, full ) {
						// 'full' is the row's data object, and 'data' is this column's data
						// e.g. 'full[0]' is the comic id, and 'data' is the comic title
						return '<label class="text-center size-14">' + data + '</label>';
						}
					},
					//APPLICANTS FULLNAME
					{
						"aTargets": [ 1 ], // Column to target
						"mRender": function ( data, type, full ) {
						// 'full' is the row's data object, and 'data' is this column's data
						// e.g. 'full[0]' is the comic id, and 'data' is the comic title
						return '<a href="Applicant/' + full["applicant_id"] + '/Profile" class="size-14 dtem">' + full["firstname"] + ' ' + full["middle"] + ' ' + full["lastname"] + '</a>';
						}
					},

					//APPLICANT_ID
					{
						"aTargets": [ 2 ], // Column to target
						"mRender": function ( data, type, full ) {
						// 'full' is the row's data object, and 'data' is this column's data
						// e.g. 'full[0]' is the comic id, and 'data' is the comic title
						return '<label class="text-center size-14">' + full["applicant_id"] + '</label>';
						}
					},

					//dateofapplication
					{
						"aTargets": [ 3 ], // Column to target
						"mRender": function ( data, type, full ) {
						// 'full' is the row's data object, and 'data' is this column's data
						// e.g. 'full[0]' is the comic id, and 'data' is the comic title
						return '<label class="text-center size-14">' + full["created_at"] + '</label>';
						}
					}
				]
			});
		});
        // rtrApplicants();
        //RETRIEVE SEEN COUNT
        getNewApplicants();

        //UPDATE SEEN COLUMN
        //##### UPDATE SEEN COLUMN AFTER CLICK #########
        $("#notifLink").click(function (e) {
            e.preventDefault();
            rtrApplicants();
            var myData = "1"; //build a post data structure
            jQuery.ajax({
                type: "POST", // Post / Get method
                url: "http://localhost/laravel/public/notified", //Where form data is sent on submission
                dataType:"text", // Data type, HTML, json etc.
                data:myData, //Form variables
                success:function (response) {
                    console.log('success');
                    getNewApplicants();
                },
                error:function (xhr, ajaxOptions, thrownError){
                    alert(thrownError);
                },
            });
        });
        
        $('#drp-bx').hover( function() {
            getNewApplicants();
        });

    });

    function getNewApplicants() {
        $("#notifBadge").load('retrieve');
    }

    function rtrApplicants() {
        $.getJSON("retrieveApplicants",function(data) {
        $('#abody').empty();
        $.each(data, function(i,data) {
            var listData = "<a href='Applicant/" + data.applicant_id + "/Profile' class='sn-bg notif size-14 cnt mrg-lft-1 left label-black'> [ " + data.created_at + ' ] [ Applicant ID: ' + data.applicant_id + ' ] ' + data.firstname + ' ' + data.middle + ' ' + data.lastname + " </a>";
            $('#abody').append(listData);
        });
    });
    }




    	// $(window).on('hashchange', function() {
 //        if (window.location.hash) {
 //            var page = window.location.hash.replace('#', '');
 //            if (page == Number.NaN || page <= 0) {
 //                return false;
 //            } else {
 //                getPosts(page);
 //            }
 //        }
 //    });
 
 //    $(document).ready(function() {
 //        $(document).on('click', '.pagination a', function (e) {
 //            getPosts($(this).attr('href').split('page=')[1]);
 //            e.preventDefault();
 //        });
 //    });
 
 //    function getPosts(page) {
 //        $.ajax({
 //            url : '?page=' + page,
 //            dataType: 'json',
 //        }).done(function (data) {
 //            $('.applicantList').html(data);
 //            location.hash = page;
 //        }).fail(function () {
 //            alert('Applicants could not be loaded.');
 //        });
 //    }
</script>

@endsection