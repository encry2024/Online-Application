@extends('Template.Front')

@section('head')
	@include('Utilities.Topbar.Topbar')
@endsection

@section('body')
	@include('Utilities.Sidebar.Sidebar')
	@include('Fields.Admin.admin')
@endsection

@section('scripts')
<script>
    $(document).ready(function() {
    	//
	    $.getJSON("retApp",function(data) {
	        $('#example1').dataTable({
				"aaData": data,
				"aaSorting": [[ 4, 'desc' ]],
				//DISPLAYS THE VALUE
				//sTITLE - HEADER
				//MDATAPROP - TBODY
				"aoColumns": 
				[

	        		{"sTitle": "#", "mDataProp": "id", "sClass": "size-14"},
	        		{"sTitle": "Fullname", "sWidth": "267px", "mDataProp": "firstname"},
	        		{"sTitle": "Applicant ID", "mDataProp": "applicant_id"},
	        		{ "sTitle": "Status", "mDataProp": "status" },
	        		{"sTitle": "Date Applied", "mDataProp": "dateofapplication"}
	        	],
	        	"aoColumnDefs": 
	        	[
	        		//FORMAT THE VALUES THAT IS DISPLAYED ON mDataProp
	        		//ID
	        		{ "bSortable": false, "aTargets": [ 0 ] },
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
							return '<label class="size-14 dtem">' + full["firstname"] + ' ' + full["middle"] + ' ' + full["lastname"] + '</label>';
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
						"aTargets": [ 4 ], // Column to target
						"mRender": function ( data, type, full ) {
						// 'full' is the row's data object, and 'data' is this column's data
						// e.g. 'full[0]' is the comic id, and 'data' is the comic title
						return '<label class="text-center size-14">' + full["created_at"] + '</label>';
						}
					},

					{
						"aTargets": [ 3 ], // Column to target
						"mRender": function ( data, type, full ) {
						// 'full' is the row's data object, and 'data' is this column's data
						// e.g. 'full[0]' is the comic id, and 'data' is the comic title
						if ( full["status"] != "Hired" ) {
							return '<label class="text-center size-14 alert-box radius warning alert-custom">' + full["status"] + '</label>';
						} else
							return '<label class="text-center size-14 alert-box radius success alert-custom">' + full["status"] + '</label>';
						}
					}
				],

				//Assign ID
				"fnRowCallback": function (nRow, aData, iDisplayIndex, iDisplayIndexFull) {
				//var id = aData[0];
					var id = aData.applicant_id;
					$(nRow).attr("data-pass", id);
					return nRow;
				},

				"fnDrawCallback": function( oSettings ) {
					$('#example1 tbody tr').click( function() {
						var id = $(this).attr("data-pass");
						document.location.href = "{{ URL::to('/') }}/Applicant/" + id + "/Profile";
					});

					$('#example1 tbody tr').hover(function() {
						$(this).css('cursor', 'pointer');
					}, function() {
						$(this).css('cursor', 'auto');
					});
					/* Need to redo the counters if filtered or sorted */
					if ( oSettings.bSorted || oSettings.bFiltered )
					{
						for ( var i=0, iLen=oSettings.aiDisplay.length ; i<iLen ; i++ )
						{
							$('td:eq(0)', oSettings.aoData[ oSettings.aiDisplay[i] ].nTr ).html( "<label>" + (i+1) + "</label>" );
						}
					}
				}
			});

		var $container = $("#content");
		$container.load("{{ URL::to('/') }}/retrieve");
		var refreshId = setInterval( function() {
			$container.load("{{ URL::to('/') }}/retrieve");
		}, 1000);

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
                url: "{{ URL::to('/') }}/notified", //Where form data is sent on submission
                dataType:"text", // Data type, HTML, json etc.
                data:myData, //Form variables
                success:function (response) {
                    console.log('success');
                    getNewApplicants();
                },
                error:function (xhr, ajaxOptions, thrownError){
                    alert(thrownError);
                }
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
</script>
@endsection


@section('style')
<style type="text/css">
	body {
		background-color: #f5f5f5;
	}
</style>
@endsection