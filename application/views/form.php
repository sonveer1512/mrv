<html>

<head>
    <meta http-equiv=Content-Type content="text/html; charset=UTF-8">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/1.1.3/sweetalert.min.js"></script>
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/1.1.3/sweetalert.min.css">
    <!-- <meta name="viewport" content="width=device-width, initial-scale=1.0"> -->
    <style type="text/css">
        body {
            text-align: -webkit-center;
            font-family: sans-serif !important;
            background: linear-gradient(45deg, #fefbad, #e67917, #c5eee2);
        }

        fieldset {
            display: block;
            margin-inline-start: 2px;
            margin-inline-end: 2px;
            padding-block-start: 0.35em;
            padding-inline-start: 0.75em;
            padding-inline-end: 0.75em;
            padding-block-end: 0.625em;
            min-inline-size: min-content;
            border: 3px solid threedface;
            margin: 5px 5px;
            border-image: initial;
        }


        input[type=text],
        input[type=date] {
            width: 100%;

        }

        label {
            font-size: 14px;
        }

        legend {
            width: 18%;
            font-weight: 700;
            border: none;
        }

        h1 {
            text-align: center;
            font-weight: bolder;
            font-size: 5.1rem;
        }

        h3,
        h4 {
            text-align: center;
            font-weight: bolder
        }

        .container {
            border: 14px solid #000;
            padding: 20px 10px;
            margin: 20px;
            background: whitesmoke;
        }

        input {
            border: 1px solid rgb(72 71 71);
            height: 35px;
        }

        select {
            height: 30px;
            width: 50%;
        }

        input[type=checkbox],
        input[type=radio] {
            margin: 0px;
            vertical-align: middle;
            zoom: 1.3;
        }

        .btn-success {
            font-size: 16px;
            padding: 10px;
            margin-top: 20px;
            margin-bottom: 20px;
        }

        table {
            font-family: Arial !important;
            width: 100%;
        }

        table td {
            padding: 0px 10px 0px 10px;
            font-size: 13px;
        }

        .uploadimg {
            float: right;
            margin-top: -60px;
            margin-bottom: 15px;
            margin-right: 10px;
        }



        .logo1img {
            margin-top: -23px;
            text-align: left;
            margin-left: 33px;
            width: 58px
        }

        .logo2img {
            text-align: right;
            padding-right: 20px;
        }

        .square {
            height: 120px;
            width: 120px;
            border: 1px solid black;
            border-radius: 10px;
            text-align: center;
        }

        label#uploadphoto {
            top: 29%;
            left: 18%;
            position: sticky;
        }

        .heading {
            width: 90%;
            padding-top: 20px;
            font-weight: 700;
            font-size: 20px;
            text-align: center;
        }

        .text_uppercase {
            text-transform: uppercase;
        }

        .underline {
            border-bottom: 1px dotted black;
        }

        .underline2 {
            border-bottom: 1px dotted black;
            width: 20%
        }

        .underline3 {
            border-bottom: 1px dotted black;
            width: 15%
        }

        input[type=file] {
            display: block;
            text-align-last: center;
            background: white;
        }

        [type="file"] {
            color: #878787;
            border-radius: 6px;
        }

        [type="file"]::-webkit-file-upload-button {
            background: green;
            border: 1px solid green;
            border-radius: 6px 0px 0px 6px;
            color: #fff;
            cursor: pointer;
            font-size: 11px;
            outline: none;
            padding: 10px 25px;
            text-transform: uppercase;
            transition: all 1s ease;
            float: left
        }

        [type="file"]::-webkit-file-upload-button:hover {
            background: #fff;
            border: 2px solid #535353;
            color: #000;
        }

        /* GENERAL STYLING OF PAGE — NOT APPLICABLE TO EXAMPLE */
        body {
            padding: 20px;
        }

        #blah {
            width: 100%;
            object-fit: fill;
            height: 100%;
        }


        @media screen and (max-width: 1080px) {
            .container {
                width: 100%;
                padding: 20px 5px;
                margin: 20px 0px;
                border: 7px solid #000;
            }
        }
    </style>
</head>

<body>

    <div class="container">

        <table>
            <tr>
                <td>
                    <div class="logo1img">
                        <img src="<?php echo base_url() ?>assets/img/mrv-logo.png">
                    </div>
                </td>
                <td>
                    <h1>M.R. Vivekananda Model School</h1>
                    <h3>Senior Secondary(Recognised) Affiliated to C.B.S.E</h3>
                    <h4>Sector-13,Dwarka,New Delhi-78,Tel.:43008528,43008529
                        <br>
                        www.mrvschooldwarka.in,contact@mrvschool.com
                    </h4>
                </td>
                <td>
                    <div class="logo2img">
                        <img src="<?php echo base_url() ?>assets/img/logo.png">
                    </div>
                </td>
            </tr>
        </table>


        <form class="submit" method="post" id="form_data" enctype="multipart/form-data" onsubmit="return validemail()">

            <div class="row">
                <div class="col-md-12">
                    <h3>REGISTRATION FORM</h3>
                    <h3> (2023-2024) </h3>
                    <div class="uploadimg">
                        <div class="square" style="overflow: hidden; margin-bottom: 15px; background: white;">
                            <label id="uploadphoto">Upload <br>Photograph</label>
                            <img id="blah" src="" alt="your image" style="display: none;" />
                        </div>
                        <input type="file" name="user_image" id="user_image">
                        <span id="image_error"></span>
                    </div>
                </div>
            </div>


            <table style="margin-top: 10px">
                <tr>
                    <td width="50%">
                        <label style="margin-left:5%">Serial No.</label>
                        <?php
                        $this->db->select('MAX(id) as id');
                        $this->db->from('mrvform');
                        $query = $this->db->get();
                        $result = $query->result_array();


                        ?>
                        <input type="hidden" name="serialno" id="serialno" value="<?= $serialno = "MRV" . str_pad($result[0]['id'] + 1, 5, "0", STR_PAD_LEFT); ?>"><strong style="text-decoration: underline"><?= $serialno = "MRV" . str_pad($result[0]['id'] + 1, 5, "0", STR_PAD_LEFT); ?></strong>

                    </td>

                    <td width="50%" style="text-align: right;">
                        <label>Registration for class </label>
                        <select name="class" style="width: 150px;margin-right:12px" id="class">
                            <option>Nursery</option>
                            <option>KG</option>
                            <option>1st</option>
                            <option>2nd</option>
                            <option>3rd</option>
                            <option>4th</option>
                            <option>5th</option>
                            <option>6th</option>
                            <option>7th</option>
                            <option>8th</option>
                            <option>9th</option>
                            <option>10th</option>
                            <option>11th</option>
                            <option>12th</option>
                        </select>

                    </td>
                </tr>
            </table>

            <fieldset>
                <legend>Personal Details</legend>

                <div class="row">
                    <div class="col-md-12">
                        <table>
                            <tr>
                                <td style="width: 15%">
                                    <label>1. Name of the Child</label>
                                </td>
                                <td> <input type="text" class="text_uppercase" onkeydown="return /[a-z]/i.test(event.key)" name="name" id="name" onkeyup="changename()" onkeydown="changename()">
                                    <span id="name_error"></span>
                                </td>

                            </tr>
                        </table>

                        <table style="margin-top: 20px;">
                            <tr>
                                <td style="width: 15%">
                                    <label>2. Date of Birth</label>
                                </td>
                                <td><input type="date" name="dob" id="dob" onchange="showdobwords(this.value); showage(this.value);">
                                    <span id="dob_error"></span>
                                </td>
                            </tr>
                        </table>

                        <table style="margin-top: 20px;">
                            <tr>
                                <td style="width: 15%;text-align:center">
                                    <label>(In words)</label>
                                </td>
                                <td> <input type="text" name="dobwords" id="dobwords" readonly>

                                </td>
                            </tr>
                        </table>
                    </div>
                </div>

                <div class="row">
                    <div class="col-md-12">

                        <table style="margin-top: 20px;">
                            <tr>
                                <td style="width: 15%">
                                    <label>3. Age</label>
                                </td>
                                <td><input type="text" name="age" id="age" readonly>
                                    (as on 31st March, 2023)

                                </td>
                            </tr>
                        </table>

                        <table style="margin-top: 20px;">
                            <tr>
                                <td style="width: 15%"><label>4. Gender:</label> </td>
                                <td style="width: 36%">
                                    <select name="gender">
                                        <option>Male</option>
                                        <option>Female</option>
                                    </select>
                                </td>

                                <td style="width: 8%"><label>Caste:</label> </td>
                                <td style="width: 40%">
                                    <select name="caste">
                                        <option>General</option>
                                        <option>OBC</option>
                                        <option>SC</option>
                                        <option>ST</option>
                                        <option>EWS</option>
                                        <option>Minority</option>
                                    </select>
                                </td>
                            </tr>

                        </table>
                        <table style="margin-top: 20px;">
                            <tr>
                                <td style="width: 30%"><label>5. Approx Annual Income from all sources Rs. </label></td>
                                <td><input type="text" name="annual_income" id="annual_income">
                                    <span id="annual_income_error"></span>
                                </td>
                            </tr>
                        </table>
                        <table style="margin-top: 20px;">
                            <tr>
                                <td style="width: 30%"><label>6. Class for which admission is sought </label></td>
                                <td><input type="text" name="class_sought" id="class_sought">
                                    <span id="class_sought_error"></span>
                                </td>
                            </tr>
                        </table>
                    </div>
                </div>

            </fieldset>


            <fieldset>
                <legend>Family Details</legend>

                <div class="row">
                    <div class="col-md-12">

                        <table>
                            <tr>
                                <td style="width: 30%"><label>7. Father's Name (in Block Letters)</label> </td>
                                <td><input type="text" onkeydown="return /[a-z]/i.test(event.key)" class="text_uppercase" name="fathername" id="fathername">
                                    <span id="fname_error"></span>
                                </td>

                            </tr>
                        </table>

                        <table style="margin-top: 20px; line-height: 2">
                            <tr>
                                <td style="width: 30%"><label>Father's/Guardian's Occupation</label></td>
                                <td>
                                    <select name="father_occupation">
                                        <option selected disabled value>-- Select Occupation -- </option>
                                        <option>Government Servant</option>
                                        <option>Private Employee</option>
                                        <option>Self Employeed</option>
                                        <option>HomeMaker</option>

                                    </select>

                                </td>
                            </tr>
                        </table>

                        <table style="margin-top: 10px;">
                            <tr>
                                <td style="width: 30%">
                                    <label>Father's Occupation & Contact No.</label>
                                </td>
                                <td> <input type="text" name="father_occupation_description" id="father_occupation_description">
                                    <span id="foccupation_error"></span>
                                </td>
                            </tr>
                        </table>

                        <table style="margin-top: 10px;">
                            <tr>
                                <td style="width: 30%">
                                    <label>Father's Email Id</label>
                                </td>
                                <td> <input type="text" name="father_email"  id="father_email" >
                                    <!-- <span id="fatheremail_error"></span> -->
                                    <span id="emailerror"></span>
                                </td>
                            </tr>
                        </table>

                        <table style="margin-top: 20px;">
                            <tr>
                                <td style="width: 30%"><label>8. Mother's Name (in Block Letters)</label> </td>
                                <td><input type="text" onkeydown="return /[a-z]/i.test(event.key)" class="text_uppercase" name="mothername" id="mothername">
                                    <span id="mname_error"></span>
                                </td>

                            </tr>
                        </table>

                        <table style="margin-top: 20px; line-height: 2">
                            <tr>
                                <td style="width: 30%"> <label>Mother's Occupation</td>
                                <td>
                                    <select name="mother_occupation">
                                        <option selected disabled value>-- Select Occupation -- </option>
                                        <option>Government Servant</option>
                                        <option>Private Employee</option>
                                        <option>Self Employeed</option>
                                        <option>HomeMaker</option>
                                    </select>

                                </td>
                            </tr>
                        </table>

                        <table style="margin-top: 10px;">
                            <tr>
                                <td style="width: 30%">
                                    <label>Mother's Occupation & Contact No.</label>
                                </td>
                                <td><input type="text" name="mother_occupation_description" id="mother_occupation_description">
                                    <span id="moccupation_error"></span>
                                </td>
                            </tr>
                        </table>

                        <table style="margin-top: 10px;">
                            <tr>
                                <td style="width: 30%">
                                    <label>Mother's Email Id</label>
                                </td>
                                <td> <input type="text" name="mother_email" id="mother_email">
                                <span id="motheremail_error"></span>
                                </td>
                            </tr>
                        </table>
                    </div>
                </div>
            </fieldset>

            <fieldset>
                <legend>Address Details</legend>

                <div class="row">
                    <div class="col-md-12">
                        <table>
                            <tr>
                                <td style="width: 25%"><label>9. Permanent Residential Address </label> </td>
                                <td><input type="text" name="address" id="address">
                                    <span id="address_error"></span>
                                </td>
                            </tr>
                        </table>

                        <table style="margin-top: 10px;">
                            <tr>
                                <td style="width: 25%; padding-left: 24px;"><label>Tel No </label></td>
                                <td><input type="text" name="telno" id="telno" style="width: 30%" maxlength="10">
                                    <span id="telno_error"></span>
                                </td>
                                </td>

                            </tr>
                        </table>
                    </div>
                </div>
            </fieldset>


            <fieldset>
                <legend>Other Details</legend>

                <div class="row">
                    <div class="col-md-12">

                        <table>
                            <tr>
                                <td style="width: 35%"><label>10. Wheather school Transport is :- <strong>(yes/no)</strong> </label> </td>
                                <td>
                                    <select name="transport" style="width: 25%">
                                        <option>No</option>
                                        <option>Yes</option>
                                    </select>
                                </td>
                            </tr>
                        </table>


                        <table style="margin-top: 20px;">
                            <tr>
                                <td><label>11. Medical Information: Does the child have some special needs/ailment/allergies? </label>

                                    <input type="checkbox" name="medical_info" value="1">
                                </td>
                            </tr>
                        </table>

                        <table style="margin-top: 10px;">
                            <tr>
                                <td style="width: 15%; padding-left: 32px;"><label>if yes, give details </label></td>
                                <td><input type="text" name="medical_problem" id="medical_problem"></td>
                            </tr>
                        </table>


                        <table style="margin-top: 20px;">
                            <tr>
                                <td><label>12. If Sibling (real brother/sister-only) studying in this School</label></td>
                            </tr>
                        </table>

                        <table style="margin-top: 10px;">
                            <tr>
                                <td style="padding-left: 32px;"><label>Give details of the sibling/siblings</label></td>
                            </tr>
                        </table>

                        <table style="margin-top: 10px;">
                            <tr>
                                <td style="width: 15%; padding-left: 12px;"><label>Sibling's Name</label></td>
                                <td>1. </td>
                                <td><input type="text" name="siblingname[]" id="siblingname"></td>
                                <td>Class</td>
                                <td><input type="text" name="siblingclass[]" id="siblingclass"></td>
                                <td>Section</td>
                                <td><input type="text" name="siblingsection[]" id="siblingsection"></td>
                                <td style="width: 8%">Admn No.</td>
                                <td><input type="text" name="siblingadmnno[]" id="siblingadmnno"></td>
                            </tr>
                        </table>

                        <table style="margin-top: 10px;">
                            <tr>
                                <td style="width: 15%; padding-left: 12px;">&nbsp;</td>
                                <td>2.</td>
                                <td><input type="text" name="siblingname[]" id="siblingname"></td>
                                <td>Class</td>
                                <td><input type="text" name="siblingclass[]" id="siblingclass"></td>
                                <td>Section</td>
                                <td><input type="text" name="siblingsection[]" id="siblingsection"></td>
                                <td style="width: 8%">Admn No.</td>
                                <td><input type="text" name="siblingadmnno[]" id="siblingadmnno"></td>
                            </tr>
                        </table>
                    </div>
                </div>



                <table style="margin-top: 20px;">
                    <tr>
                        <td><label>13. Please register my son/daughter/ward <span style="border-bottom: 1px dotted black" id="againname"> </span> in your school, for admission.</label></td>
                    </tr>
                    <tr>
                        <td style="padding-left: 32px;">
                            <input type="checkbox" name="terms" value="1">
                            In case considered for admission, I shall produce the requisite documents at time of admission
                        </td>
                    </tr>
                </table>


                <table style="margin-left:20px">
                    <tr>
                        <td style="width: 20%">
                            <label style="margin-top:-25px">Please Enter Transaction ID</label>
                        </td>
                        <td> <input type="text" name="transaction_id" id="transaction_id">
                            <span id="transaction_error"></span>
                            <br>
                            <p style="font-size: 15px;padding-top:10px"><strong>Registration Fees: &#8377; 25/-</strong></p>
                        </td>
                        <td style="width: 50%">For Online Payment our bank details are as follows: - <br>
                            <strong>Bank:</strong> M. R. Vivekananda Model School <br>
                            <strong>Current A/C No.:</strong> 52291010000010 <br>
                            <strong>IFSC Code:</strong> PUNB0522910 <br>
                            <strong>Branch:</strong> New Delhi <br>
                            <strong>Contact No: </strong> <a href="tel: 011-43008528">011-43008528</a>, <a href="tel: 011-43008528">011-43008529</a>
                        </td>
                    </tr>
                </table>



                <table style="margin-top: 20px;">
                    <tr>
                        <td style="text-align: center">
                            <button class="btn btn-success btn-sm hstackloader" name="submitbtn" type="submit" id="submitbtn">Submit Form</button>
                            <div class="hstack"></div>
                        </td>
                    </tr>
                </table>
            </fieldset>


            <table style="margin-top: 10px;">
                <tr>
                    <td><label> Documents </label><br>
                        <ul>
                            <li>Photograph of Child and Parents.</li>
                            <li>Photocopy of <strong>Date of Birth</strong> of Child.</li>
                            <li>Photocopy of <strong>Residential</strong> Proof of Parents.</li>
                            <li>Photocopy of <strong>Aadhar Card</strong> of Parents & Child.</li>
                        </ul>
                    </td>
                </tr>
            </table>

        </form>

    </div>


    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    <script src="https://cdn.lordicon.com/fudrjiwc.js"></script>

    <script type="text/javascript">
        function changename() {
            var name = document.getElementById("name").value;
            document.getElementById("againname").innerHTML = name;
        }


        function showdobwords(str) {
            $.ajax({
                url: "<?= base_url('index/showdobwords') ?>",
                type: "post",
                data: {
                    str: str
                },
                success: function(result) {
                    $("#dobwords").val(result);
                }
            })
        }


        function showage(str) {
            $.ajax({
                url: "<?= base_url('index/showage') ?>",
                type: "post",
                data: {
                    str: str
                },
                success: function(result) {
                    $("#age").val(result);
                }
            })
        }


        function readURL(input) {
            if (input.files && input.files[0]) {
                var reader = new FileReader();

                reader.onload = function(e) {
                    $('#blah').attr('src', e.target.result);
                }

                reader.readAsDataURL(input.files[0]);
            }
        }

        $("#user_image").change(function() {
            $("#uploadphoto").css('display', 'none');
            $("#blah").css('display', 'block');
            readURL(this);

        });
        // 
    </script>


    <script type="text/javascript">
        $(document).on('submit', '#form_data', function(ev) {
            $('.error').html('');

            ev.preventDefault(); // Prevent browers default submit.
            var formData = new FormData(this);
            var error = false;
            var user_image = $("#user_image").val();
            var name = $("#name").val();
            var dob = $("#dob").val();
            var fathername = $("#fathername").val();
            var father_occupation_description = $("#father_occupation_description").val();
            var mothername = $("#mothername").val();
            var mother_occupation_description = $("#mother_occupation_description").val();
            var address = $("#address").val();
            var annual_income = $("#annual_income").val();
            var class_sought = $("#class_sought").val();
            var telno = $("#telno").val();
            var father_email = $("#father_email").val();
            var mother_email = $("#mother_email").val();
            var transaction_id = $("#transaction_id").val();

            function IsEmail(father_email) {
                var regex = /^([a-zA-Z0-9_\.\-\+])+\@(([a-zA-Z0-9\-])+\.)+([a-zA-Z0-9]{2,4})+$/;
                if(!regex.test(father_email)) {
                    return false;
                }else{
                    return true;
                }
            }
            function IsEmail1(mother_email) {
                var regex = /^([a-zA-Z0-9_\.\-\+])+\@(([a-zA-Z0-9\-])+\.)+([a-zA-Z0-9]{2,4})+$/;
                if(!regex.test(mother_email)) {
                    return false;
                }else{
                    return true;
                }
            }

            if (user_image == '') {
                $("#image_error").html('Please Choose Image');
                $("#image_error").css('color', 'red');

            }
            if (name == '') {
                $("#name_error").html('Please Enter Name');
                $("#name_error").css('color', 'red');

            }
            if (dob == '') {
                $("#dob_error").html('Please Enter DOB');
                $("#dob_error").css('color', 'red');

            }
            if (fathername == '') {
                $("#fname_error").html("Please Enter Father's Name");
                $("#fname_error").css('color', 'red');

            }
            if (father_occupation_description == '') {
                $("#foccupation_error").html("Please Select Father's Occupation");
                $("#foccupation_error").css('color', 'red');

            }
            if (mothername == '') {
                $("#mname_error").html("Please Enter Mother's Occupation");
                $("#mname_error").css('color', 'red');

            }
            if (mother_occupation_description == '') {
                $("#moccupation_error").html("Please Enter Mother's Name");
                $("#moccupation_error").css('color', 'red');

            }
            if (address == '') {
                $("#address_error").html('Please Enter Address');
                $("#address_error").css('color', 'red');

            }
            if (annual_income == '') {
                $("#annual_income_error").html('Please Enter Annual Income');
                $("#annual_income_error").css('color', 'red');

            }
            if (class_sought == '') {
                $("#class_sought_error").html('Please Enter Class Sought');
                $("#class_sought_error").css('color', 'red');

            }
            if (telno == '') {
                $("#telno_error").html('Please Enter Tel No.');
                $("#telno_error").css('color', 'red');

            }
            // if (father_email == '') {
            //     $("#fatheremail_error").html("Please Enter Father's Email Id");
            //     $("#fatheremail_error").css('color', 'red');

            // }
            if (mother_email == false) {
                $("#motheremail_error").html("Please Enter Valid Email ");
                $("#motheremail_error").css('color', 'red');

            }
            if (transaction_id == '') {
                $("#transaction_error").html('Please Enter Transaction Id');
                $("#transaction_error").css('color', 'red');

            }
           
            if(IsEmail(father_email  )==false){
                  $("#emailerror").html('Please Enter Valid Email');
                  $("#emailerror").css('color', 'red');

                    return false;
            }else{

            if (error == false) {
                $.ajax({
                    url: "<?= base_url('index/input_data'); ?>",
                    type: 'post',
                    data: formData,
                    beforeSend: function() {

                        $(".hstack").html('Please Wait...........');
                        $(".hstack").css('color', 'red');
                        $(".hstackloader").css('display', 'none');
                    },
                    success: function(result) {
                        // json data
                        var dataResult = JSON.parse(result);
                        if (dataResult.done == '1') {
                            swal('Student Registered 🙂', ' ', 'success');
                            setTimeout(function() {
                                location.reload(true);
                            }, 1000);
                        }

                        if (dataResult.done == '0') {
                            swal('Student Not Registered ☹️', ' ', 'error');

                            setTimeout(function() {
                                location.reload(true);
                            }, 1000);

                        }

                        if (dataResult.name == '0') {
                            swal('Student Already Registered ☹️', ' ', 'error');



                        }


                    },
                    cache: false,
                    contentType: false,
                    processData: false,
                })

            }
        }
        })
    </script>
    <script>
        document.querySelector("#telno").addEventListener("keypress", function(evt) {
            if (evt.which != 8 && evt.which != 0 && evt.which < 48 || evt.which > 57) {
                evt.preventDefault();
            }
        });
    </script>
    
   