<!doctype html>
<html lang="en" class="light-theme" ng-app="myApp">
<head>
	<!-- Required meta tags -->
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="csrf-token" content="{{ csrf_token() }}" />
	<!--favicon-->
    <link rel="icon" type="image/x-icon" href="{{url('public/frontend/fav/coolsymbolonline.ico') }}">
    <title>{{ PROJECT_NAME }} Admin - @yield('title')</title>
	<link href="{{ url(BACKEND_PLGIN_PATH.'/Drag-And-Drop/dist/imageuploadify.min.css') }}" rel="stylesheet" />
    <link href="{{ url(BACKEND_IMG_PATH.'/logo-icon.png') }}" rel="icon"/>
	<link href="" rel="stylesheet"/>
	<link href="{{ url(BACKEND_PLGIN_PATH.'/simplebar/css/simplebar.css') }}" rel="stylesheet" />
	<link href="{{ url(BACKEND_PLGIN_PATH.'/perfect-scrollbar/css/perfect-scrollbar.css') }}" rel="stylesheet" />
	<link href="{{ url(BACKEND_PLGIN_PATH.'/metismenu/css/metisMenu.min.css') }}" rel="stylesheet" />
	<!-- Bootstrap CSS -->
	<link href="{{ url(BACKEND_CSS_PATH.'/bootstrap.min.css') }}" rel="stylesheet">
	<link href="{{ url(BACKEND_CSS_PATH.'/bootstrap-extended.css') }}" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css?family=Noto+Sans:400,400i,700,700i&display=swap" rel="stylesheet">
	<!-- Only for Model  End-->
	<link href="{{ url(BACKEND_CSS_PATH.'/app.css') }}" rel="stylesheet">
	<link href="{{ url(BACKEND_CSS_PATH.'/icons.css') }}" rel="stylesheet">
	<!-- Theme Style CSS -->
	<link rel="stylesheet" href="{{ url(BACKEND_CSS_PATH.'/dark-theme.css') }}" />
	<link rel="stylesheet" href="{{ url(BACKEND_CSS_PATH.'/semi-dark.css') }}" />
	<link rel="stylesheet" href="{{ url(BACKEND_CSS_PATH.'/header-colors.css') }}" />
	<link rel="stylesheet" href="{{ url(BACKEND_CSS_PATH.'/custom-style.css') }}" />
	{{-- for chart start  --}}
	{{-- <script type="text/javascript" src="https://cdn.fusioncharts.com/fusioncharts/latest/fusioncharts.js"></script> --}}
	<!-- Include fusion theme -->
	{{-- <script type="text/javascript" src="https://cdn.fusioncharts.com/fusioncharts/latest/themes/fusioncharts.theme.fusion.js"></script> --}}
	{{-- <script type="text/javascript" src="https://rawgit.com/fusioncharts/fusioncharts-jquery-plugin/develop/dist/fusioncharts.jqueryplugin.min.js"></script> --}}
	{{-- for chart end --}}
	{{-- for chart start  --}}
	<script src="{{ url(BACKEND_JS_PATH.'/fusioncharts/fusioncharts.js') }}"></script>
	<!-- Include fusion theme -->
	<script src="{{ url(BACKEND_JS_PATH.'/fusioncharts/fusioncharts.theme.fusion.js') }}"></script>
	{{-- for chart end --}}
	<script src="https://code.highcharts.com/highcharts.js"></script>

	<link rel="stylesheet" href="//code.jquery.com/ui/1.11.2/themes/smoothness/jquery-ui.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
	<link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet" />
    <script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>   
	{{-- <script src="https://cdn.ckeditor.com/4.22.1/standard/ckeditor.js"></script> --}}
	{{-- Tiny Editor Start here  --}}
	{{-- <script  type="text/javascript"  src='https://cdn.tiny.cloud/1/8f6c5hin5zey58xxgkrr7yvj0f74e0a022gw8u5cu4mz5z8v/tinymce/7/tinymce.min.js'  referrerpolicy="origin">
    </script>  --}}
     <script src="https://cdn.tiny.cloud/1/axkzyxr89r2qfz6xc6dbyu2un5npqfgj9a8oo5bcvn5ytlgl/tinymce/8/tinymce.min.js" referrerpolicy="origin" crossorigin="anonymous"></script>
     
     
        <script>
            
             const useDarkMode = window.matchMedia('(prefers-color-scheme: dark)').matches;
             const isSmallScreen = window.matchMedia('(max-width: 1023.5px)').matches;
  
              sdftinymce.init({
                selector: 'textarea',
                plugins: [
                  // Core editing features
                  'anchor', 'autolink', 'charmap', 'codesample', 'emoticons', 'image', 'link', 'lists', 'media', 'searchreplace', 'table', 'visualblocks', 'wordcount','advcode','tinymcespellchecker','powerpaste', 'advtable','editimage', 'advtemplate', 'ai', 'mentions'
                  // Your account includes a free trial of TinyMCE premium features
                  // Try the most popular premium features until Aug 8, 2025:
                  'checklist', 'mediaembed', 'casechange', 'formatpainter', 'pageembed', 'a11ychecker', 'tinymcespellchecker', 'permanentpen', 'powerpaste', 'advtable', 'advcode', 'editimage', 'advtemplate', 'ai', 'mentions', 'tinycomments', 'tableofcontents', 'footnotes', 'mergetags', 'autocorrect', 'typography', 'inlinecss', 'markdown','importword', 'exportword', 'exportpdf'
                ],
                toolbar: 'undo redo | code | blocks fontfamily fontsize | bold italic underline strikethrough | link image media table mergetags | addcomment showcomments | spellcheckdialog a11ycheck typography | align lineheight | checklist numlist bullist indent outdent | emoticons charmap | removeformat',
                tinycomments_mode: 'embedded',
                tinycomments_author: 'Author name',
                 height: 600,
                image_caption: true,
                quickbars_selection_toolbar: 'bold italic | quicklink h2 h3 blockquote quickimage quicktable',
                mergetags_list: [
                  { value: 'First.Name', title: 'First Name' },
                  { value: 'Email', title: 'Email' },
                ],
                ai_request: (request, respondWith) => respondWith.string(() => Promise.reject('See docs to implement AI Assistant')),
              });
            </script> 
            
	<script type="text/javascript">
    	const useDarkMode = window.matchMedia('(prefers-color-scheme: dark)').matches;
    	const isSmallScreen = window.matchMedia('(max-width: 1023.5px)').matches;

     	 tinymce.init({
		selector: 'textarea#open-source-plugins',
		selector: '#textarea-body',
		selector: 'textarea',
		plugins: 'preview importcss searchreplace autolink autosave save directionality code visualblocks visualchars fullscreen image link media codesample table charmap pagebreak nonbreaking anchor insertdatetime advlist lists wordcount help charmap quickbars emoticons accordion',
		editimage_cors_hosts: ['picsum.photos'],
		menubar: 'file edit view insert format tools table help',
		toolbar: "undo redo | accordion accordionremove | blocks fontfamily fontsize | bold italic underline strikethrough | align numlist bullist | link image | table media | lineheight outdent indent| forecolor backcolor removeformat | charmap emoticons | code fullscreen preview | save print | pagebreak anchor codesample | ltr rtl",
		autosave_ask_before_unload: true,
		autosave_interval: '30s',
		autosave_prefix: '{path}{query}-{id}-',
		autosave_restore_when_empty: false,
		autosave_retention: '2m',
		image_advtab: true,
		link_list: [
			{ title: 'My page 1', value: 'https://www.tiny.cloud' },
			{ title: 'My page 2', value: 'http://www.moxiecode.com' }
		],
		image_list: [
			{ title: 'My page 1', value: 'https://www.tiny.cloud' },
			{ title: 'My page 2', value: 'http://www.moxiecode.com' }
		],
		image_class_list: [
			{ title: 'None', value: '' },
			{ title: 'Some class', value: 'class-name' }
		],
		importcss_append: true,
		file_picker_callback: (callback, value, meta) => {
			/* Provide file and text for the link dialog */
			if (meta.filetype === 'file') {
			callback('https://www.google.com/logos/google.jpg', { text: 'My text' });
			}

			/* Provide image and alt text for the image dialog */
			if (meta.filetype === 'image') {
			callback('https://www.google.com/logos/google.jpg', { alt: 'My alt text' });
			}

			/* Provide alternative source and posted for the media dialog */
			if (meta.filetype === 'media') {
			callback('movie.mp4', { source2: 'alt.ogg', poster: 'https://www.google.com/logos/google.jpg' });
			}
		},
		height: 600,
		image_caption: true,
		quickbars_selection_toolbar: 'bold italic | quicklink h2 h3 blockquote quickimage quicktable',
		noneditable_class: 'mceNonEditable',
		toolbar_mode: 'sliding',
		contextmenu: 'link image table',
		skin: useDarkMode ? 'oxide-dark' : 'oxide',
		content_css: useDarkMode ? 'dark' : 'default',
		content_style: 'body { font-family:Helvetica,Arial,sans-serif; font-size:16px }'
		});

      // this is standared only remove OLd or
		OLdtinymce.init({
			selector: '#myTextarea',
			selector: 'textarea',
			contextmenu: false,
		// width: 600,
			//height: 300,
			browser_spellcheck: true,
			plugins: [
			'advlist', 'autolink', 'link', 'image', 'lists', 'charmap', 'preview', 'anchor', 'pagebreak',
			'searchreplace', 'wordcount', 'visualblocks', 'visualchars', 'code', 'fullscreen', 'insertdatetime',
			'media', 'table', 'emoticons', 'help'
			],
			toolbar: 'undo redo | styles | bold italic | alignleft aligncenter alignright alignjustify | ' +
			'bullist numlist outdent indent | link image | print preview media fullscreen | ' +
			'forecolor backcolor emoticons | help',
			menu: {
			favs: { title: 'My Favorites', items: 'code visualaid | searchreplace | emoticons' }
			},
			menubar: 'favs file edit view insert format tools table help',
			content_css: 'css/content.css'
		});
    </script>	 

	{{-- Tiny Editor End here  --}}

	<style>
		.logo-icon {
			width: 64px;
		}
		a.has-arrow, ul#menu a:hover, li.mm-active a {
			border-radius: 10px;
		}
		ul#menu li ul {
			border: none;
			border-left: solid 2px #00000017;
			margin: 7px 0px 7px 20px;
			padding-left: 10px;
		}
		@media (min-width:1000px){
		    .sideloder {
                position: fixed;
                left: 0;
                top: 0;
                width: 60px;
                height: 100%;
                z-index: 999;
            }
		}
		
		.highcharts-credits {
              display: none;
            }
	</style>
	<script>
		$(function() {
			$(".knob").knob();
			$(document).ready(function(e){
				$(document.body).resize(function () {
				var isDesktop = $(document).width() > 992;
				if (isDesktop) {
					setTimeout(function(){
						$(".sideloder").remove();
					}, 100)
					$(".sidebar-wrapper").hover(function(){
						if($(".wrapper").hasClass( "sidebar-hovered" )){
							$(".wrapper").removeClass("sidebar-hovered");
						}else{
							$(".wrapper").toggleClass("sidebar-hovered");
						}
					})
				}else{
					$(".wrapper").removeClass("toggled");
				}
			}).resize();
			})
		});
	</script>
	<?php 
		//for logout if user inactive
		$session_id = Session::all();
		$authstatus = Auth::user()->status ;
		$url = url('login');
		if ($authstatus == 0){
			Session::flush();
			Route::resource('login', 'LoginController'); 
		}
	?>
</head>

<body ng-controller="LogCtrl">
	<!--wrapper-->
	<div class="wrapper toggled">
		<!--sidebar wrapper -->
		@include('backend.common.sidebar')
		<div class="sideloder"></div>
		<!--end sidebar wrapper -->
		<!--start header -->
		@include('backend.common.header')
		<!--end header -->
		<!--start page wrapper -->
        @yield('content')
		<!--end page wrapper -->
		<!--start overlay-->
	</div>
	<!--end wrapper-->
	<!--start switcher-->
	
    @include('backend.common.notifications')
	<!--end switcher-->

{{-- work start for date range --}}

{{-- <link rel="stylesheet" href="https://cdn.datatables.net/1.13.1/css/jquery.dataTables.min.css">
<link rel="stylesheet" href="https://cdn.datatables.net/datetime/1.2.0/css/dataTables.dateTime.min.css">
<script src="https://code.jquery.com/jquery-3.5.1.js"></script>
<script src="https://cdn.datatables.net/1.13.1/js/jquery.dataTables.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.29.2/moment.min.js"></script>
<script src="https://cdn.datatables.net/datetime/1.2.0/js/dataTables.dateTime.min.js"></script> --}}

	<!-- Bootstrap JS -->
	<script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
	<script src="{{ url(BACKEND_JS_PATH.'/bootstrap.bundle.min.js') }}"></script>
	<!--plugins-->
	<!--script src="https://code.jquery.com/jquery-3.6.1.min.js"></script -->
	<script src="{{ url(BACKEND_JS_PATH.'/jquery.min.js') }}"></script>
	<script src="{{ url(BACKEND_PLGIN_PATH.'/simplebar/js/simplebar.min.js') }}"></script>
	<script src="{{ url(BACKEND_PLGIN_PATH.'/metismenu/js/metisMenu.min.js') }}"></script>
	<script src="{{ url(BACKEND_PLGIN_PATH.'/perfect-scrollbar/js/perfect-scrollbar.js') }}"></script>
	<script src="{{ url(BACKEND_PLGIN_PATH.'/chartjs/chart.min.js') }}"></script>
	<script src="{{ url(BACKEND_PLGIN_PATH.'/vectormap/jquery-jvectormap-2.0.2.min.js') }}"></script>
    <script src="{{ url(BACKEND_PLGIN_PATH.'/vectormap/jquery-jvectormap-world-mill-en.js') }}"></script>
	<script src="{{ url(BACKEND_PLGIN_PATH.'/jquery.easy-pie-chart/jquery.easypiechart.min.js') }}"></script>
	<script src="{{ url(BACKEND_PLGIN_PATH.'/sparkline-charts/jquery.sparkline.min.js') }}"></script>
	<script src="{{ url(BACKEND_PLGIN_PATH.'/jquery-knob/excanvas.js') }}"></script>
	<script src="{{ url(BACKEND_PLGIN_PATH.'/jquery-knob/jquery.knob.js') }}"></script>
	<script src="{{ url(BACKEND_PLGIN_PATH.'/datatable/js/jquery.dataTables.min.js') }}"></script>
	<script src="{{ url(BACKEND_PLGIN_PATH.'/datatable/js/dataTables.bootstrap5.min.js') }}"></script>
	<script src="https://cdn.jsdelivr.net/npm/jquery-validation@1.19.5/dist/jquery.validate.js"></script>
	<!--script src="https://cdn.jsdelivr.net/npm/jquery-validation@1.19.5/dist/jquery.validate.min.js"></script -->
	<!--notification js -->
	<script src="{{ url(BACKEND_COMMON_PATH.'/plugins/notifications/js/lobibox.min.js') }}"></script>
	<script src="{{ url(BACKEND_COMMON_PATH.'/plugins/notifications/js/notifications.min.js') }}"></script>
	<script src="{{ url(BACKEND_COMMON_PATH.'/plugins/notifications/js/notification-custom-script.js') }}"></script>
	
	<script src="{{ url(BACKEND_JS_PATH.'/broker/broker.js') }}"></script>
	<script src="//code.jquery.com/ui/1.11.2/jquery-ui.js"></script>  
	<script src="{{ url(BACKEND_JS_PATH.'/index.js') }}"></script>
	<!--app JS-->
	<script src="{{ url(BACKEND_JS_PATH.'/app.js') }}"></script>

	<script src="{{ url(BACKEND_COMMON_PATH.'/plugins/Drag-And-Drop/dist/imageuploadify.min.js') }}"></script>
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/vanillajs-datepicker@1.3.1/dist/css/datepicker-bs5.min.css">
	<script>
		$(document).ready(function () {
			$('#image-uploadify').imageuploadify();
		})
	</script>


	<script>
		$('.modal').on('shown.bs.modal', function (e) {
			$('.modal.show').each(function (index) {
				$(this).css('z-index', 1101 + index*2);
			});
			$('.modal-backdrop').each(function (index) {
				$(this).css('z-index', 1101 + index*2-1);
			});
		});
    </script>
	<script>
		$(document).ready(function() {
			$('#example').DataTable();
		  } );


		  $(document).ready(function () {
				$('#example36').DataTable();
				$('.sub_table').DataTable();
			});
			
			$(document).ready(function () {
				$('#shipper-table').DataTable();
			});
			
			$(document).ready(function () {
				$('#carrier_table').DataTable();
			});
			
	</script>
	<script>
		$(document).ready(function() {
			var table = $('#example2').DataTable( {
				lengthChange: false,
				buttons: [ 'copy', 'excel', 'pdf', 'print']
			} );
		 
			table.buttons().container()
				.appendTo( '#example2_wrapper .col-md-6:eq(0)' );
		} );
	</script>
	
    <script>
		$(document).ready(function() {
			$( "#pickready" ).datepicker({ dateFormat: 'yy-mm-dd', minDate:'-1m', maxDate:'+1m'});
			$( "#dropready" ).datepicker({ dateFormat: 'yy-mm-dd' ,minDate:'-1m', maxDate:'+1m'});	
		});
			//02-29-2024
		//this is use in payment status update in AR module
		$(document).ready(function() {
			$( "#received_date" ).datepicker({ dateFormat: 'yy-mm-dd' ,minDate:'-26m', maxDate:'0'});	
		});


		//New date formate all tms
		$(document).ready(function() {
			$( "#newformateDAte" ).datepicker({ dateFormat: 'yy-mm-dd' ,minDate:'-26m', maxDate:'0'});	
		});
	</script>
	
</body>

</html>