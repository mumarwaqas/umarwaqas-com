/*------------------------- 
Frontend related javascript
-------------------------*/

/**
 * HELPER COMMENT START
 * 
 * This file contains all of the frontend related javascript. 
 * With frontend, it is meant the WordPress site that is visible for every visitor.
 * 
 * Since you added the jQuery dependency within the "Add JS support" module, you see down below
 * the helper comment a function that allows you to use jQuery with the commonly known notation: $('')
 * By default, this notation is deactivated since WordPress uses the noConflict mode of jQuery
 * You can also use jQuery outside using the following notation: jQuery('')
 * 
 * Here's some jQuery example code you can use to fire code once the page is loaded: $(document).ready( function(){} );
 * 
 * Using the ajax example, you can send data back and forth between your frontend and the 
 * backend of the website (PHP to ajax and vice-versa). 
 * As seen in the example below, we use the jQuery $.ajax function to send data to the WordPress
 * callback my_demo_ajax_call, which was added within the The_Academic_Papers_Orders_Run class.
 * From there, we process the data and send it back to the code below, which will then display the 
 * example within the console of your browser.
 * 
 * As you added the heartbeat example, you will find two new function callbacks down below
 * within the code. The heartbeat-send callback is used to send the data from Javascript to
 * your server.
 * The heartbeat-tick will then receive back the validated data of the callback, based on the 
 * myplugin_receive_heartbeat data within the The_Academic_Papers_Orders_Run class.
 * 
 * You can add the localized variables in here as followed: tap.plugin_name
 * These variables are defined within the localization function in the following file:
 * core/includes/classes/class-the-academic-papers-orders-run.php
 * 
 * HELPER COMMENT END
 */

var $ = jQuery;

console.log("order js file updated testing..");

function setCookie(cname, cvalue, exdays) {
    const d = new Date();
    d.setTime(d.getTime() + (exdays * 24 * 60 * 60 * 1000));
    let expires = "expires=" + d.toUTCString();
    document.cookie = cname + "=" + cvalue + ";" + expires + ";path=/";
}

function getCookie(cname) {
    let name = cname + "=";
    let decodedCookie = decodeURIComponent(document.cookie);
    let ca = decodedCookie.split(';');
    for (let i = 0; i < ca.length; i++) {
        let c = ca[i];
        while (c.charAt(0) == ' ') {
            c = c.substring(1);
        }
        if (c.indexOf(name) == 0) {
            return c.substring(name.length, c.length);
        }
    }
    return "";
}

function calculate_price() {
    console.log("calculate price");
    //from_page == false if from header
    var num_of_pages = 0;
    var delivery_time = "0";
	var number_of_words = 0

    num_of_pages = parseInt($("#number_of_pages").val())

    if (!isNaN(num_of_pages) && num_of_pages > 1)
	{
        $("#page").text("Pages");
	}
	else
	{
        $("#page").text("Page");
    }
    if (!isNaN(num_of_pages) && num_of_pages > 0)
	{
        $("#number_of_words").val(num_of_pages * 250);
        $("#word").text("Words");
	}
	else
	{
        $("#number_of_words").val(0);
        $("#word").text("Word");
    }

    delivery_time = $("#delivery_time").val();

	number_of_words = parseInt($("#number_of_words").val());
    var num_of_words = num_of_pages * 250;
    setCookie("number_of_words", num_of_words, 1);
	$(".sum_word_count").text(num_of_words + " Words");

	if($("#number_of_pages").val() != undefined){
		$("#number_of_pages").css('width', (($("#number_of_pages").val().length) * 11) + 'px');
		$("#number_of_words").css('width', (($("#number_of_words").val().length) * 10) + 'px');
		$("#page").css('width', ((($("#page").text().length) * 11) + 3) + 'px');
		$("#word").css('width', ((($("#word").text().length) * 10) + 3) + 'px');
	}

	number_of_words = parseInt($("#number_of_words").val());
    var num_of_words = num_of_pages * 250;
    setCookie("number_of_words", num_of_words, 1);
	$(".sum_word_count").text(num_of_words);

	var price_per_page = parseFloat(0.00);
    var discount = parseFloat(0.00); // In percentage
    if (num_of_pages > 0) {
        console.log(delivery_time);

        if ($("#academic_level").val() == "A Level / O Level") {
            console.log("A Level / O Level");
            switch (delivery_time) {
                case '1':
                    price_per_page = 22.95;
                    break;
                case '2':
                    price_per_page = 19.95;
                    break;
                case '3':
                    price_per_page = 17.95;
                    break;
                case '5':
                    price_per_page = 15.95;
                    break;
                case '10':
                    price_per_page = 13.95;
                    break;
                case '15':
                    price_per_page = 11.95;
                    break;
                case '15+':
                    price_per_page = 9.95;
                    break;
                default:
                    console.log("Wrong input");
            }
        }
        else if ($("#academic_level").val() == "Undergraduate") {
            console.log("Under Graduate");
            switch (delivery_time) {
                case '1':
                    price_per_page = 24.95;
                    break;
                case '2':
                    price_per_page = 21.95;
                    break;
                case '3':
                    price_per_page = 19.95;
                    break;
                case '5':
                    price_per_page = 17.95;
                    break;
                case '10':
                    price_per_page = 15.95;
                    break;
                case '15':
                    price_per_page = 13.95;
                    break;
                case '15+':
                    price_per_page = 12.95;
                    break;
                default:
                    console.log("Wrong input");
            }
        }
        else if ($("#academic_level").val() == "Graduate / Master's") {
            console.log("Master");
            switch (delivery_time) {
                case '1':
                    price_per_page = 26.95;
                    break;
                case '2':
                    price_per_page = 23.95;
                    break;
                case '3':
                    price_per_page = 21.95;
                    break;
                case '5':
                    price_per_page = 19.95;
                    break;
                case '10':
                    price_per_page = 17.95;
                    break;
                case '15':
                    price_per_page = 15.95;
                    break;
                case '15+':
                    price_per_page = 13.95;
                    break;
                default:
                    console.log("Wrong input");
            }
        }
        else if ($("#academic_level").val() == "PhD") {
            console.log("PhD");
            switch (delivery_time) {
                case '1':
                    price_per_page = 28.95;
                    break;
                case '2':
                    price_per_page = 25.95;
                    break;
                case '3':
                    price_per_page = 23.95;
                    break;
                case '5':
                    price_per_page = 21.95;
                    break;
                case '10':
                    price_per_page = 19.95;
                    break;
                case '15':
                    price_per_page = 17.95;
                    break;
                case '15+':
                    price_per_page = 15.95;
                    break;
                default:
                    console.log("Wrong input");
            }
        }
        else if ($("#academic_level").val() == "Other") {
            console.log("else");
            switch (delivery_time) {
                case '1':
                    price_per_page = 28.95;
                    break;
                case '2':
                    price_per_page = 25.95;
                    break;
                case '3':
                    price_per_page = 23.95;
                    break;
                case '5':
                    price_per_page = 21.95;
                    break;
                case '10':
                    price_per_page = 19.95;
                    break;
                case '15':
                    price_per_page = 17.95;
                    break;
                case '15+':
                    price_per_page = 15.95;
                    break;
                default:
                    alert("Wrong input");
            }
        }
        var total_price = price_per_page * num_of_pages; //Price w/o discount
        var final_price = total_price;
        var discounted_price = 0;
        //Calculate discount
        if (num_of_words >= 250 && num_of_words <= 5000) {
            discount = 5;
        }
        if (num_of_words > 5000 && num_of_words <= 10000) {
            discount = 10;
        }
        if (num_of_words > 10000) {
            discount = 15;
        }

		// Calculate final prices
		discounted_price = (discount * total_price) / 100;
		final_price = total_price - discounted_price;


        $("#price_per_page_tbl").html(price_per_page.toFixed(2));
        $("#price_per_page_val").val(price_per_page.toFixed(2));

        $("#discount_per_tbl").html(discount.toFixed(0));
        $("#discount_per_val").val(discount.toFixed(0));

        $("#discount_price_tbl").html(discounted_price.toFixed(2));
        $("#discount_price_val").val(discounted_price.toFixed(2));

        $("#price_tbl").html(total_price.toFixed(2));
        $("#price_val").val(total_price.toFixed(2));

        $("#final_price_tbl").html(final_price.toFixed(2));
        $("#final_price_val").val(final_price.toFixed(2));

        $("#final_price_tbl_2").html(final_price.toFixed(2));
        $("#final_price_val_2").val(final_price.toFixed(2));

		$(".payamount").val(final_price.toFixed(2) + "GBP");

        $("#btn_orderNow").attr("disabled", false);

		// TAPFIRST30
		
// 		var get_coupon_code = parseFloat($('.coupon_code').text());
//         var get_final_price = $('#final_price_tbl').text();

// 		console.log(get_coupon_code);

// 		if(get_coupon_code){
			
//                 discounted_price = (final_price * (get_coupon_code.toFixed(2) / 100)).toFixed(2);
//                 var set_final_price = final_price - discounted_price

//                 $('#discount_price_tbl').html(discounted_price);
//                 $('#final_price_tbl').html(set_final_price.toFixed(2));
//                 $('#final_price_tbl_2').html(set_final_price.toFixed(2));
// 		}
// 		else
// 		{
//         		$("#discount_price_tbl").html(discounted_price.toFixed(2));
//                 $('#final_price_tbl').html(final_price.toFixed(2));
//                 $('#final_price_tbl_2').html(final_price.toFixed(2));
// 		}

 


    }
    else 
	{
        $("#price_per_page_tbl").html(0.00);
        $("#price_per_page_val").val(0.00);

        $("#discount_per_tbl").html(0.00);
        $("#discount_per_val").val(0.00);

        $("#discount_price_tbl").html(0.00);
        $("#discount_price_val").val(0.00);

        $("#price_tbl").html(0.00);
        $("#price_val").val(0.00);

        $("#final_price_tbl").html(0.00);
        $("#final_price_val").val(0.00);

        $("#final_price_tbl_2").html(0.00);
        $("#final_price_val_2").val(0.00);

        $("#btn_orderNow").attr("disabled", true);
        return false;
    }
}

$(document).ready(function () {
	setTimeout(function(){
		calculate_price();
	},1000)

    
	$(document).on('change', '#citation_style', function () {
        var changedValue = this.value;
        $(".sum_citation_style").text(changedValue);
    });

	$(document).on('change', '#paper_quality', function () {
        var changedValue = this.value;
        $(".sum_paper_quality").text(changedValue);
    });

    $(document).on('change', '#type_of_paper', function () {
        var changedValue = this.value;
        $(".sum_paper_type").text(changedValue);
    });
    $(document).on('change', '#subject', function () {
        var changedValue = this.value;
        $(".sum_subject").text(changedValue);
    });
    $(document).on('change', '#academic_level', function () {
        $(".sum_academic_level").text(this.value);
    });
	$(document).on('click', '#add-page', function () {
        $(".sum_number_of_pages").text($('#number_of_pages').val());
        $(".sum_word_count").text($('#number_of_words').val());
    });
	$(document).on('click', '#sub-page', function () {
        $(".sum_number_of_pages").text($('#number_of_pages').val());
        $(".sum_word_count").text($('#number_of_words').val());
    });
	$(document).on('input keyup', '#number_of_pages', function () {
        $(".sum_number_of_pages").text($('#number_of_pages').val());
        $(".sum_word_count").text($('#number_of_words').val());
    });
	$(document).on('change', '#delivery_time', function () {
        $(".sum_delivery_time").text(this.value + ' Days');
    });

    // Get the saved value from the cookie
    var type_of_paper = getCookie('type_of_paper');
    // If a value is found, select the dropdown option
    if (type_of_paper) {
        $('#type_of_paper').val(type_of_paper);
    }
    $(document).on('change', '#type_of_paper', function () {
        console.log("type of paper selected:", $(this).val());
        setCookie("type_of_paper", $(this).val(), 1);
        calculate_price();
    });
    // Auto-select on page refresh
    if (type_of_paper) {
        $('#type_of_paper').val(type_of_paper).trigger('change');
    }

    // Get the saved value from the cookie
    var academic_level = getCookie('academic_level');
    // If a value is found, select the dropdown option
    if (academic_level) {
        $('#academic_level').val(academic_level);
    }
    $(document).on('change', '#academic_level', function () {
        console.log("education level selected:", $(this).val());
        setCookie("academic_level", $(this).val(), 1);
        calculate_price();
    });
    // Auto-select on page refresh
    if (academic_level) {
        $('#academic_level').val(academic_level).trigger('change');
    }

    // Get the saved value from the cookie
    var subject = getCookie('subject');
    // If a value is found, select the dropdown option
    if (subject) {
        $('#subject').val(subject);
    }
    $(document).on('change', '#subject', function () {
        console.log("type of subject selected:", $(this).val());
        setCookie("subject", $(this).val(), 1);
        calculate_price();
    });
    // Auto-select on page refresh
    if (subject) {
        $('#subject').val(subject).trigger('change');
    }

    // Get the saved value from the cookie
    var number_of_pages = getCookie('number_of_pages');
    // If a value is found, select the dropdown option
    if (number_of_pages) {
        $('#number_of_pages').val(number_of_pages);
    }
    $(document).on('input keyup change', '#number_of_pages', function () {
        console.log("number_of_pages selected:", $(this).val());
        setCookie("number_of_pages", $(this).val(), 1);
        calculate_price();
    }); 
   // Auto-select on page refresh
    if (number_of_pages) {
        $('#number_of_pages').val(number_of_pages);
        $(".sum_number_of_pages").text($('#number_of_pages').val());
    }

    // Get the saved value from the cookie
    var number_of_sources = getCookie('number_of_sources');
    // If a value is found, select the dropdown option
    if (number_of_sources) {
        $('#number_of_sources').val(number_of_sources);
    }
    $(document).on('input keyup change', '#number_of_sources', function () {
        console.log("number_of_sources selected:", $(this).val());
        setCookie("number_of_sources", $(this).val(), 1);
        calculate_price();
    }); 
   // Auto-select on page refresh
    if (number_of_sources) {
        $('#number_of_sources').val(number_of_sources);
    }


    // Get the saved value from the cookie
    var citation_style = getCookie('citation_style');
    // If a value is found, select the dropdown option
    if (citation_style) {
        $('#citation_style').val(citation_style);
    }
    $(document).on('change', '#citation_style', function () {
        console.log("citation_style selected:", $(this).val());
        setCookie("citation_style", $(this).val(), 1);
        calculate_price();
    }); 
   // Auto-select on page refresh
    if (citation_style) {
        $('#citation_style').val(citation_style).trigger('change');
    }

    // Get the saved value from the cookie
    var delivery_time = getCookie('delivery_time');
    // If a value is found, select the dropdown option
    if (delivery_time) {
        $('#delivery_time').val(delivery_time);
    }
    $(document).on('change', '#delivery_time', function () {
        console.log("delivery_time style selected:", $(this).val());
        setCookie("delivery_time", $(this).val(), 1);
        calculate_price();
    });
    // Auto-select on page refresh
    if (delivery_time) {
        $('#delivery_time').val(delivery_time).trigger('change');
    }

    // Get the saved value from the cookie
    var paper_quality = getCookie('paper_quality');
    // If a value is found, select the dropdown option
    if (paper_quality) {
        $('#paper_quality').val(paper_quality);
    }
    $(document).on('change', '#paper_quality', function () {
        console.log("paper_quality style selected:", $(this).val());
        setCookie("paper_quality", $(this).val(), 1);
        calculate_price();
    });
    // Auto-select on page refresh
    if (paper_quality) {
        $('#paper_quality').val(paper_quality).trigger('change');
    }

//     // Get the saved value from the cookie
//     var paper_description = getCookie('paper_description');
//     // If a value is found, select the dropdown option
//     if (paper_description) {
//         $('#paper_description').text(paper_description);
//     }
//     $(document).on('input copy keyup', '#paper_description', function () {
//         console.log("paper_description style selected:", $(this).val());
//         setCookie("paper_description", $(this).val(), 1);
//     });
//     // Auto-select on page refresh
//     if (paper_description) {
//         $('#paper_description').text(paper_description);
//     }


    // Get the saved value from the cookie
    var paper_format = getCookie('paper_format');
    // If a value is found, select the dropdown option
    if (paper_format) {
        $('#paper_format').val(paper_format);
    }
    $(document).on('change', '#paper_format', function () {
        console.log("paper_format style selected:", $(this).val());
        setCookie("paper_format", $(this).val(), 1);
    });
    // Auto-select on page refresh
    if (paper_format) {
        $('#paper_format').val(paper_format).trigger('change');
    }


    // Get the saved value from the cookie
    var writers = getCookie('writer_id');
    // If a value is found, select the dropdown option
    if (writers) {
        $('#writers').val(writers);
    }
    $(document).on('change', '#writers', function () {
        console.log("writers level selected:", $(this).val());
        setCookie("writer_id", $(this).val(), 1);
    });
    // Auto-select on page refresh
    if (writers) {
        $('#writers').val(writers).trigger('change');
    }


    // Get the saved value from the cookie
    var topic = getCookie('topic');
    // If a value is found, select the dropdown option
    if (topic) {
        $('#topic').val(topic);
    }
    $(document).on('input copy keyup', '#topic', function () {
        console.log("topic style selected:", $(this).val());
        setCookie("topic", $(this).val(), 1);
    });
    // Auto-select on page refresh
    if (topic) {
        $('#topic').val(topic);
    }


    // Get the saved value from the cookie
    var name = getCookie('name');
    // If a value is found, select the dropdown option
    if (name) {
        $('#name').val(name);
		$(".payfullName").val(name);
    }
    $(document).on('input copy keyup', '#name', function () {
        console.log("name style selected:", $(this).val());
        setCookie("name", $(this).val(), 1);
    });
    // Auto-select on page refresh
    if (name) {
        $('#name').val(name);
		$(".payfullName").val(name);
	}

    // Get the saved value from the cookie
    var alternate_email = getCookie('alternate_email');
    // If a value is found, select the dropdown option
    if (alternate_email) {
        $('#alternate_email').val(alternate_email);
    }
    $(document).on('input copy keyup', '#alternate_email', function () {
        console.log("alternate_email style selected:", $(this).val());
        setCookie("alternate_email", $(this).val(), 1);
    });
    // Auto-select on page refresh
    if (alternate_email) {
        $('#alternate_email').val(alternate_email);
    }

    // Get the saved value from the cookie
    var email = getCookie('email');
    // If a value is found, select the dropdown option
    if (email) {
        $('#email').val(email);
		$(".payemail").val(email);
    }
    $(document).on('input copy keyup', '#email', function () {
        console.log("email style selected:", $(this).val());
        setCookie("email", $(this).val(), 1);
    });
    // Auto-select on page refresh
    if (email) {
        $('#email').val(email);
		$(".payemail").val(email);
    }

    // Get the saved value from the cookie
    var phone = getCookie('phone');
    // If a value is found, select the dropdown option
    if (phone) {
        $('#phone').val(phone);
    }
    $(document).on('input copy keyup', '#phone', function () {
        console.log("phone style selected:", $(this).val());
        setCookie("phone", $(this).val(), 1);
    });
    // Auto-select on page refresh
    if (phone) {
        $('#phone').val(phone);
    }

    // Get the saved value from the cookie
    var upload_file_path = getCookie('upload_file_path');
    // If a value is found, select the dropdown option
    if (upload_file_path) {
        $('.upload_file_field').val(upload_file_path);
    }
})

$(document).ready(function () {

    // Order Page Script Start
    $(".previous").click(function () {
        $('#formCheckout').hide();
        $('#previous').hide();
        $('#next').show();
		//$('#orderForm').find('input, textarea, select').attr('readonly', false).attr('disabled', false);
		$('#orderForm').find('input[type=text], input[type=email], textarea, select').attr('readonly', false).attr('disabled', false);
		$('#orderForm').find('button').show();
    });

    // Ajax to store data into Database
    $(document).on("click", "#next", function (e) {
        var topic = $("#topic").val();
        var paperDetails = $("#paper_details").val();
        var name = $(".name").val();
        var email = $(".email").val();
        var phone = $(".phone").val();

        $(".error").remove();

        if (topic.length < 1) {
            $("#topic").after('<span class="error">This field is required</span>');
            $("html, body").animate(
                {
                    scrollTop: $(".tabset").offset().top,
                },
                { passive: true },
                500
            );
        } else if (paperDetails.length < 1) {
            $("#paper_details").after(
                '<span class="error">This field is required</span>'
            );
            $("html, body").animate(
                {
                    scrollTop: $("#topic").offset().top,
                },
                { passive: true },
                500
            );
        } else if (name.length < 1) {
            $(".name").after(
                '<span class="error">This field is required</span>'
            );
            $("html, body").animate(
                {
                    scrollTop: $("#paper_details").offset().top,
                },
                { passive: true },
                500
            );
        } else if (email.length < 1) {
            $(".email").after('<span class="error">This field is required</span>');
            $("html, body").animate(
                {
                    scrollTop: $("#paper_details").offset().top,
                },
                { passive: true },
                500
            );
        } else if (phone.length < 1) {
            $(".phone").after('<span class="error">This field is required</span>');
            $("html, body").animate(
                {
                    scrollTop: $("#paper_details").offset().top,
                },
                { passive: true },
                500
            );
        } 
        else 
        {
            $('#next').hide();
            $('#formCheckout').show();
            $('#previous').show();

            setTimeout(function () {
                files_array = [];
                uploaded_files = [];
                $("#uploaded_files li").each(function (index) {
                    var fileName = $(this).text();
                    files_array.push(fileName);
                    uploaded_files.push(fileName);
                });
                var uploadedFiles = JSON.stringify(files_array);
                console.log("Stringiy Files array " + uploadedFiles);
                console.log(uploaded_files);
                var writers = $("#writers").find(":selected").text();
                var name = $("#name").val();
                var email = $("#email").val();
                var alternate_email = $("#alternate_email").val();
                var phone = $("#phone").val();
                var format = $("#citation_style").find(":selected").text();
                var sources = $("#number_of_sources").val();
                var level = $("#academic_level").find(":selected").text();
                var urgency = $("#delivery_time").find(":selected").text();
                var quantity = $("#number_of_pages").val();
                var words = $("#number_of_words").val();
                var paper = $("#type_of_paper").find(":selected").text();
                var area = $("#subject").find(":selected").text();
                var topic = $("#topic").val();
                var details = $("#paper_details").val();
                var price = $("#final_price_val").val();
                var basic_price = $("#price_val").val();
                var discounted_price = $("#discount_price_val").val();
                var coupon_code = $(".coupon_code").text();

                $(".payemail").val(email);
                $(".payamount").val(price + "GBP");
                $(".payfullName").val(name);

                var currentTime = new Date();
                e.preventDefault();
                $.ajax({
                    type: "post",
                    dataType: "json",
                    url: "/wp-admin/admin-ajax.php",
                    enctype: "multipart/form-data",
                    data: {
                        action: "save_order_details",
                        writers: writers,
						name: name,
                        email: email,
                        alternate_email: alternate_email,
                        phone: phone,
                        format: format,
                        sources: sources,
                        level: level,
                        urgency: urgency,
                        quantity: quantity,
                        words: words,
                        paper: paper,
                        area: area,
                        topic: topic,
                        uploadedFiles: uploadedFiles,
                        uploaded_files: uploaded_files,
                        details: details,
                        currentTime: currentTime,
                        coupon_code: coupon_code,
                        price: price,
                        basic_price: basic_price,
                        discounted_price: discounted_price
                    },
					beforeSend: function() {
						$("#loader").addClass("loading");
					},
					success: function(data) {
						$("#loader").removeClass("loading");
						if (response.type == "success") {
							console.log("Successfully data added!");
						} else {
							console.log("Not Successfull!");
						}
					},
					error: function(xhr) {
						// if error occured
						// alert("Error occured.please try again");
					},
					complete: function() {
						$("#loader").removeClass("loading");
					},
                });
            }, 400);
            // $('#orderForm').find('input, textarea, select').attr('disabled', true);
			$('#orderForm').find('input[type=text], input[type=email], textarea, select').attr('readonly', true).attr('disabled', true);

            $('#orderForm').find('button').hide();
        }
    });

    // Upload file through Ajax
    $(".upload_file").change(function () {
        var filename = $("input[type=file]")
            .val()
            .replace(/.*(\/|\\)/, "");
        // we need only the only one for now, right?
        const file = this.files[0];
        const formData = new FormData();
        formData.append("upload_file", file);

        $.ajax({
            url: "/wp-admin/admin-ajax.php?action=fileUpload",
            type: "POST",
            data: formData,
            contentType: false,
            enctype: "multipart/form-data",
            processData: false,
            success: function (response) {
                $('input[name="attachment"]').val(response);
                $("#uploaded_files").append("<li>" + response + "</li>");
                $("#upload_file_label").append("<li>" + filename + "</li>");
            },
        });
    });

    // Delete file
    $(document).on("click", "#upload_file_label li", function () {
        var getText = $(this).text();
        var getElement = $(this);
        $("#uploaded_files li").filter(function () {
            var getValue = $(this).text().includes(getText);
            if (getValue) {
                $(this).remove();
                $(getElement).remove();
            }
        });
    });

	if(jQuery().uploadFile) {

        var csrfToken = document.querySelector('meta[name="csrf-token"]').getAttribute('content');

        $("#multiple_file_uploader").uploadFile({
			fileName : "upload_file",
            url: "/file-upload",
			multiple : true,
			// maxFileSize: -1,
			maxFileCount : 99,
			allowedTypes : "jpeg,jpg,png,gif,webp,pdf,avi,mp4,mov,doc,docx,odt,pdf,xls,xlsx,csv,ods,ppt,pptx,txt",
			showProgress : false,
			duplicateStrict: false,
			allowDuplicates: false,
			multiple: true,
			dragDrop: true,
			autoSubmit: true,
			showCancel: true,
			showAbort: false,
			showDone: false,
			showDelete: true,
			showError: true,
			showStatusAfterSuccess: true,
			showStatusAfterError: true,
			showFileCounter: false,
			fileCounterStyle: "). ",
			showFileSize: false,
			nestedForms: false,
			// statusBarWidth: '200px',
			dragdropWidth: '100%',
			dragDropStr: "<div class='upload-icon'><img src='./assets/images/upload-icon.webp' width='31.792px' height='26px' loading='lazy' alt='upload file'> <span>Upload your files Here or </span></div>",
			uploadStr: "<div class='add-file-btn'>+ Add Files</div>",
            headers: {
                'X-CSRF-TOKEN': csrfToken
            },
            // abortStr: "Abort",
			// cancelStr: "Cancel",
			// deleteStr: "<img src='https://www.theacademicpapers.co.uk/wp-content/themes/theacademicpapers/assets/images/file-delete.svg'>",
			onSuccess: function (files, response, xhr, pd) {
				console.log('onSuccess');
				// $('#next').css({'pointer-events':'none'});
			},
			onError: function (files, status, message, pd) {
				console.log('onError');
			},
			onCancel: function (files, pd) {},
			onAbort: function (files, pd) {},
			deleteCallback: function (files, response, xhr, pd) {
				console.log('deleteCallback');
				console.log(files.responses);
			},
			afterUploadAll: function (files, response, xhr, pd) {

				var fileUrls = files.responses;
				// Use $.each() to iterate over the array
				$.each(fileUrls, function(index, fileUrl) {
					var listItem = "<li>" + fileUrl + "</li>";            
					$("#uploaded_files").append(listItem);
					$("#upload_file_label").append(listItem);
				});
				// drop & drop file or click to upload
				$('input[name="attachment"]').val(JSON.stringify(files.responses));

				setCookie("upload_file_path", JSON.stringify(files.responses), 1);
				setCookie("upload_file_name", JSON.stringify(files.existingFileNames), 1);

// 				// Get the saved value from the cookie
// 				var upload_file_field_cookie = getCookie('upload_file_name');
// 				// If a value is found, select the dropdown option
// 				if (upload_file_field_cookie) {
// 					var html = "";
// 					$.each(JSON.parse(upload_file_field_cookie), function(index, url) {
// 						html +=	'<div class="ajax-file-upload-statusbar" style="width: 200px;">';
// 						html +=		'<div class="ajax-file-upload-filename">' + url + '</div>';
// 						html +=			'<div class="ajax-file-upload-red" style=""><img src="https://www.theacademicpapers.co.uk/wp-content/themes/theacademicpapers/assets/images/file-delete.svg">';
// 						html +=		'</div>';
// 						html +=	'</div>';
// 					});
// 					$(".ajax-file-upload-container").html(html);
// 				}

			}

		});
	}

// 	setTimeout(function(){
// 		// Get the saved value from the cookie
// 		var upload_file_field_cookie = getCookie('upload_file_name');
// 		// If a value is found, select the dropdown option
// 		if (upload_file_field_cookie) {
// 			var html = "";
// 			$.each(JSON.parse(upload_file_field_cookie), function(index, url) {
// 				html +=	'<div class="ajax-file-upload-statusbar" style="width: 200px;">';
// 				html +=		'<div class="ajax-file-upload-filename">' + url + '</div>';
// 				html +=			'<div class="ajax-file-upload-red" style=""><img src="https://www.theacademicpapers.co.uk/wp-content/themes/theacademicpapers/assets/images/file-delete.svg">';
// 				html +=		'</div>';
// 				html +=	'</div>';
// 			});
// 			$(".ajax-file-upload-container").html(html);
// 		}
// 	}, 2000);

})

function submitToCheckout() {
    $("#formCheckout").submit();
}

$(document).on('click', '.coupon-code-applay', function (e) {
    // Stop acting like a button
    e.preventDefault();
    var code = $('.code').val();
    if (code == "") {
        $('.coupon-error').text('Pleace enter a coupon code');
        return false;
    }
    $.ajax({
        type: "GET",
        dataType: "json",
        url: '/wp-admin/admin-ajax.php',
        data: {
            action: "coupon_search",
            code: code,
        },
        success: function (data) {
            if (data.message == 1) {
                $('.coupon_code').text(data.coupon_code);
                $('.code-text').text(code);
                $('.coupon-code').addClass('d-none');
                $('.coupon-applied').removeClass('d-none');
                $('.coupon-error').addClass('d-none');

                var get_actual_price = parseFloat($('#final_price_tbl').text());
                var get_coupon_code = parseFloat($('.coupon_code').text());
                // console.log(get_actual_price);
                // console.log(get_coupon_code);
                var descount = (get_actual_price * (get_coupon_code / 100)).toFixed(2);
                // console.log(descount.toFixed(2));
                var set_actual_price = get_actual_price - descount
                console.log(set_actual_price);
                $('#discount_price_tbl').html(descount);
                $('#final_price_tbl').html(set_actual_price.toFixed(2));
                $('#final_price_tbl_2').html(set_actual_price.toFixed(2));

                $('#discount_price_val').val(descount);
                $('#final_price_val').val(set_actual_price.toFixed(2));
            }
            else
			{
                $('.coupon-error').removeClass('d-none');
                console.log("No data found!");
            }
        },
        error: function (jqXHR, textStatus, errorThrown) {
            console.log(jqXHR + " :: " + textStatus + " :: " + errorThrown);
        }
    });

});

// Counter button functionality
// This button will increment the value
$(document).on("click", "#add-page", function (e) {
    // Stop acting like a button
    e.preventDefault();
    // Get the field name
    fieldName = $(this).attr("data-field");
    console.log(fieldName);
    // Get its current value
    var currentVal = parseInt($("input[name=" + fieldName + "]").val());
    // If is not undefined
    if (!isNaN(currentVal)) {
        // Increment
        setCookie(fieldName, currentVal + 1, 1);
        $("input[name=" + fieldName + "]").val(currentVal + 1);
    } else {
        // Otherwise put a 0 there
        setCookie(fieldName, '', 1);
        $("input[name=" + fieldName + "]").val(0);
    }
    calculate_price();
});

// This button will decrement the value till 0
$(document).on("click", "#sub-page", function (e) {
    // Stop acting like a button
    e.preventDefault();
    // Get the field name
    fieldName = $(this).attr("data-field");
    // Get its current value
    var currentVal = parseInt($("input[name=" + fieldName + "]").val());
    // If it isn't undefined or its greater than 0
    if (!isNaN(currentVal) && currentVal > 0) {
        // Decrement one
        setCookie(fieldName, currentVal - 1, 1);
        $("input[name=" + fieldName + "]").val(currentVal - 1);
    } else {
        // Otherwise put a 0 there
        setCookie(fieldName, '', 1);
        $("input[name=" + fieldName + "]").val(0);
    }
    calculate_price();
});

$(document).on('click', '.close', function (e) {
    // Stop acting like a button
    e.preventDefault();
    $('.code-text').text('');
    $('.coupon_code').text('');
    $('.coupon-code').removeClass('d-none');
    $('.coupon-applied').addClass('d-none');
    calculate_price();
});

$(document).on('click', '.writer_ID', function (e) {
    // Stop acting like a button
    e.preventDefault();
	var writer_id = $(this).data('writer_id');
	setCookie('writer_id', writer_id, 1);
	window.location.href = "https://www.theacademicpapers.co.uk/order-now/";
});
