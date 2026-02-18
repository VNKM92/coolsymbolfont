$(document).on("click", "#ArPaymentFormBtnOld", function () {
    var shipmentId = $(this).parent().find("#Shipment");
    var shipment_id = shipmentId.val();
    var pro_num = shipmentId.attr("data-pro");
    var pay_mode = $("#pay_mode").val();
    var invoice_amount = $("#invoice_amount").val();
    var amount_paid = $("#amount_paid").val();
    var balance_due = $("#balance_due").val();
    var check_date = $("#check_date").val();
    var received_date = $("#received_date").val();
    var deposit_date = $("#deposit_date").val();

    if (
        invoice_amount != "" &&
        amount_paid != "" &&
        balance_due != "" &&
        received_date != "" &&
        deposit_date != ""
    ) {
        $("#invoiceAmountError").hide();
        $("#amountPaidError").hide();
        $("#balanceDueError").hide();
        $("#receivedDateError").hide();
        $("#depositDateError").hide();
        if (shipment_id != "") {
            $.ajax({
                url: HOSTPATH + "admin/ar/PaymentUpdateSubmit",
                type: "get",
                cache: false,
                data: {
                    shipment_id: shipment_id,
                    pay_mode: pay_mode,
                    invoice_amount: invoice_amount,
                    amount_paid: amount_paid,
                    balance_due: balance_due,
                    check_date: check_date,
                    received_date: received_date,
                    deposit_date: deposit_date,
                    pro_num: pro_num,
                },
                success: function (data) {
                    //$('#ArPaymentUpt').html(data);
                    setTimeout(function () {
                        location.reload(true);
                    }, 500);
                },
            });
        } else {
            Swal.fire({
                position: "center",
                icon: "warning",
                title: "Invoice Not generate yet!",
                showConfirmButton: false,
                timer: 1000,
            });
        }
    } else {
        if (invoice_amount.length == "") {
            $("#invoiceAmountError").text("Enter some text!");
            return false;
        } else {
            $("#invoiceAmountError").hide();
        }

        if (amount_paid.length == "") {
            $("#amountPaidError").text("Enter some text!");
            return false;
        } else {
            $("#amountPaidError").hide();
        }
        if (balance_due.length == "") {
            $("#balanceDueError").text("Enter some text!");
            return false;
        } else {
            $("#balanceDueError").hide();
        }
        if (received_date.length == "") {
            $("#receivedDateError").text("Enter some text!");
            return false;
        } else {
            $("#receivedDateError").hide();
        }
        if (deposit_date.length == "") {
            $("#depositDateError").text("Enter some text!");
            return false;
        } else {
            $("#depositDateError").hide();
        }
    }
});
