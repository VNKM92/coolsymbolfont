// Shipment-id onclick

$(document).ready(function () {
  $(".btn-toggle").click(function () {
    $(this).toggleClass("rotate_icon");
  });

  $(".shipment_form_btn").click(function(){
    $(".shipment-step").hide();
    $($(this).attr('show')).fadeIn();

    var target = $(this).attr('show');
    if(target=='#shipment_address'){
      $("#ship_progress").addClass("start-progress");
      $("#basic_progress").addClass("complete-progress");
    }else if(target=='#carries_details'){
      $("#carrier_progress").addClass("start-progress");
      $("#ship_progress").addClass("complete-progress");
    }else if(target=='#payment_details_sec'){
      $("#payment_progress").addClass("start-progress");
      $("#carrier_progress").addClass("complete-progress");
    }else if(target=='#shipment_address'){
      $("#ship_progress").addClass("start-progress");
      $("#basic_progress").addClass("complete-progress");
    }
    return false;
  })
});

// cloesd-btn

$(document).ready(function () {
  $(".closed-btn ").on("click", function () {
    $(".left-side-admin").removeClass("active-left-side");
  });
});

// sidemenu
$(document).ready(function () {
  $(".side-menu-btn").on("click", function () {
    $(".left-side-admin").toggleClass("active-left-side");
  });
});

// Initialize tooltips
var tooltipTriggerList = [].slice.call(
  document.querySelectorAll('[data-bs-toggle="tooltip"]')
);
var tooltipList = tooltipTriggerList.map(function (tooltipTriggerEl) {
  return new bootstrap.Tooltip(tooltipTriggerEl);
});

$(document).ready(function () {
  $(".nav-tab-link").click(function () {
    $(".nav-tab-link").removeClass("nav-tab-link-active");
    $(this).addClass("nav-tab-link-active");
    $(".tab-body").hide();
    $("div" + $(this).attr("data")).fadeIn();
  });

  $("button#shipper_signature").click(function () {
    $("#create-new-loads").hide();
    $("#add_shipper").show();
  });
});

// Action-btn
$(".action-btn").click(function () {
  $(this).next().toggle();
});

// sidemenu active

$(function () {
  var url = window.location.pathname,
    urlRegExp = new RegExp(url.replace(/\/$/, "") + "$"); // create regexp to match current url pathname and remove trailing slash if present as it could collide with the link in navigation in case trailing slash wasn't present there
  // now grab every link from the navigation
  $(".menu-list-section a").each(function () {
    // and test its normalized href against the url pathname regexp
    if (urlRegExp.test(this.href.replace(/\/$/, ""))) {
      $(this).addClass("active-menu ");
    }
  });
});

function toggleForm() {
  var form = document.getElementById("secondLocationForm");
  if (form.style.display === "none") {
    form.style.display = "block";
  } else {
    form.style.display = "none";
  }
}

//

$("#done_payment").click(function () {
  $(".up_section").removeClass("d-none");
});

$("#updated_payment").click(function () {
  $(".up_section").addClass("d-none");
});

//
// Initialize CKEditor on the textarea
CKEDITOR.replace("editor1", {
  height: 300,
  filebrowserUploadUrl: "/uploader/upload.php?type=Files", // Adjust path as needed
  filebrowserImageUploadUrl: "/uploader/upload.php?type=Images", // Adjust path as needed
});

//
