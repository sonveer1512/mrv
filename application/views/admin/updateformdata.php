<?php
$id = $this->session->userdata('id');

if (!$id) {
    redirect('/login');
}

$sibilings = $editformdata[0]->siblings;
$siblingdata = json_decode($sibilings);
// echo "<pre>";
// print_r($siblingdata);
?>

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
            width:50%;
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


        <form class="submit" method="post" id="update_form" enctype="multipart/form-data">
            <input type="hidden" name="id" id="id" value="<?= $editformdata[0]->id ?>">
            <div class="row">
                <div class="col-md-12">
                    <h3>REGISTRATION FORM</h3>
                    <h3> (2023-2024) </h3>
                    <div class="uploadimg">
                        <div class="square" style="overflow: hidden; margin-bottom: 15px; background: white;">
                           
                            <img id="blah" src="<?= base_url() . 'webupload/' . $editformdata[0]->file ?>" alt="your image" />
                        </div>
                        <input type="file" name="user_image" id="user_image">
                    </div>
                </div>
            </div>


            <table style="margin-top: 10px">
                <tr>
                    <td width="50%">
                        <label style="margin-left:5%">Serial No.</label>

                        <input type="hidden" name="serialno" id="serialno" value="<?= $editformdata[0]->serial_no ?>"><strong style="text-decoration: underline"><?= $editformdata[0]->serial_no ?></strong>

                    </td>

                    <td width="50%" style="text-align: right;">
                        <label>Registration for class </label>
                        <select  name="class" style="width: 150px;margin-right:12px" id="class">
                            <option><?= $editformdata[0]->class ?></option>
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
                                <td> <input type="text" class="text_uppercase" name="name" id="name" onkeyup="changename()" onkeydown="changename()"  value="<?= $editformdata[0]->name ?>" >

                                </td>
                            </tr>
                        </table>

                        <table style="margin-top: 20px;">
                            <tr>
                                <td style="width: 15%">
                                    <label>2. Date of Birth</label>
                                </td>
                                <td><input type="date" name="dob" id="dob" onchange="showdobwords(this.value); showage(this.value);" style="width: 100%" value="<?= $editformdata[0]->dob ?>" >

                                </td>
                            </tr>
                        </table>

                        <table style="margin-top: 20px;">
                            <tr>
                                <td style="width: 15%;text-align:center">
                                    <label>(In words)</label>
                                </td>
                                <td> <input type="text" name="dobwords" id="dobwords" style="width: 100%" value="<?= $editformdata[0]->dobwords ?>" >

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
                                <td><input type="text" name="age" id="age" style="width: 100%" value="<?= $editformdata[0]->age ?>" >
                                    (as on 31st March, 2023)

                                </td>
                            </tr>
                        </table>

                        <table style="margin-top: 20px;">
                            <tr>
                                <td style="width: 15%"><label>4. Gender:</label> </td>
                                <td style="width: 36%">
                                    <select  name="gender" style="width: 100%">
                                        <option><?= $editformdata[0]->gender ?></option>
                                        <option>Male</option>
                                        <option>Female</option>
                                    </select>
                                </td>

                                <td style="width: 8%"><label>Caste:</label> </td>
                                <td style="width: 40%">
                                    <select  name="caste" style="width: 100%">
                                        <option><?= $editformdata[0]->caste ?></option>
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
                                <td><input type="text" name="annual_income" id="annual_income" style="width: 100%" value="<?= $editformdata[0]->annual_income ?>" ></td>
                            </tr>
                        </table>
                        <table style="margin-top: 20px;">
                            <tr>
                                <td style="width: 30%"><label>6. Class for which admission is sought </label></td>
                                <td><input type="text" name="class_sought" id="class_sought" style="width: 100%" value="<?= $editformdata[0]->class_sought ?>" ></td>
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
                                <td><input type="text" class="text_uppercase" name="fathername" id="fathername" value="<?= $editformdata[0]->fathername ?>" ></td>
                            </tr>
                        </table>

                        <table style="margin-top: 20px; line-height: 2">
                            <tr>
                                <td style="width: 30%"><label>Father's/Guardian's Occupation</label></td>
                                <td>
                                    <select  name="father_occupation" style="width: 100%">
                                        <option><?= $editformdata[0]->father_occupation ?> </option>
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
                                <td> <input type="text" name="father_occupation_description" id="father_occupation_description" style="width: 100%" value="<?= $editformdata[0]->father_occupation_description ?>" >
                                </td>
                            </tr>
                        </table>

                        <table style="margin-top: 10px;">
                            <tr>
                                <td style="width: 30%">
                                    <label>Father's Email Id</label>
                                </td>
                                <td> <input type="text" name="father_email" value="<?= $editformdata[0]->father_email ?>" id="father_email">
                                   
                                </td>
                            </tr>
                        </table>

                        <table style="margin-top: 20px;">
                            <tr>
                                <td style="width: 30%"><label>8. Mother's Name (in Block Letters)</label> </td>
                                <td><input type="text" class="text_uppercase" name="mothername" id="mothername" value="<?= $editformdata[0]->mothername ?>" ></td>
                            </tr>
                        </table>

                        <table style="margin-top: 20px; line-height: 2">
                            <tr>
                                <td style="width: 30%"> <label>Mother's Occupation</td>
                                <td>
                                    <select  name="mother_occupation" style="width: 100%">
                                        <option><?= $editformdata[0]->mother_occupation ?></option>
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
                                <td><input type="text" name="mother_occupation_description" id="mother_occupation_description" style="width: 100%" value="<?= $editformdata[0]->mother_occupation_description ?>" >
                                </td>
                            </tr>
                        </table>
                        <table style="margin-top: 10px;">
                            <tr>
                                <td style="width: 30%">
                                    <label>Mother's Email Id</label>
                                </td>
                                <td> <input type="text" name="mother_email" id="mother_email" value="<?= $editformdata[0]->mother_email ?>">
                                   
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
                                <td><input type="text" name="address" id="address" style="width: 100%" value="<?= $editformdata[0]->address ?>" ></td>
                            </tr>
                        </table>

                        <table style="margin-top: 10px;">
                            <tr>
                                <td style="width: 25%; padding-left: 24px;"><label>Tel No </label></td>
                                <td><input type="text" name="telno" id="telno" style="width: 30%" value="<?= $editformdata[0]->telno ?>" ></td>
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
                                    <select  name="transport" style="width: 25%">
                                        <option><?= $editformdata[0]->transport ?></option>
                                        <option>No</option>
                                        <option>Yes</option>
                                    </select>
                                </td>
                            </tr>
                        </table>


                        <table style="margin-top: 20px;">
                            <tr>
                                <td><label>11. Medical Information: Does the child have some special needs/ailment/allergies? </label>
                                    <input type="checkbox" name="medical_info" value="1" <?php if(!empty($editformdata[0]->medical_info)) { echo 'checked'; }  ?> >
                                </td>
                            </tr>
                        </table>

                        <table style="margin-top: 10px;">
                            <tr>
                                <td style="width: 15%; padding-left: 32px;"><label>if yes, give details </label></td>
                                <td><input type="text" name="medical_problem" id="medical_problem" style="width: 100%" value="<?= $editformdata[0]->medical_problem ?>" ></td>
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
                                    <td><input type="text" name="siblingname[]" id="siblingname" style="width: 100%" value="<?= $siblingdata[0]->name ?>" ></td>
                                    <td>Class</td>
                                    <td><input type="text" name="siblingclass[]" id="siblingclass" style="width: 100%" value="<?= $siblingdata[1]->class ?>" ></td>
                                    <td>Section</td>
                                    <td><input type="text" name="siblingsection[]" id="siblingsection" style="width: 100%"  value="<?= $siblingdata[2]->section ?>" ></td>
                                    <td style="width: 8%">Admn No.</td>
                                    <td><input type="text" name="siblingadmnno[]" id="siblingadmnno" style="width: 100%"  value="<?= $siblingdata[3]->admno ?>" ></td>
                                </tr>
                            </table>

                            <table style="margin-top: 10px;">
                                <tr>
                                    <td style="width: 15%; padding-left: 12px;">&nbsp;</td>
                                    <td>2.</td>
                                    <td><input type="text" name="siblingname[]" id="siblingname" style="width: 100%" value="<?= $siblingdata[4]->name ?>" ></td>
                                    <td>Class</td>
                                    <td><input type="text" name="siblingclass[]" id="siblingclass" style="width: 100%" value="<?= $siblingdata[5]->class ?>" ></td>
                                    <td>Section</td>
                                    <td><input type="text" name="siblingsection[]" id="siblingsection" style="width: 100%" value="<?= $siblingdata[6]->section ?>" ></td>
                                    <td style="width: 8%">Admn No.</td>
                                    <td><input type="text" name="siblingadmnno[]" id="siblingadmnno" style="width: 100%" value="<?= $siblingdata[7]->admno ?>" ></td>
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
                            <input type="checkbox" name="terms" value="1" >
                            In case considered for admission, I shall produce the requisite documents at time of admission
                        </td>
                    </tr>
                </table>


                <table style="margin-left:20px">
                    <tr>
                        <td style="width: 20%">
                            <label style="margin-top:-25px">Please Enter Transaction ID</label>
                        </td>
                        <td> <input type="text" name="transaction_id" id="transaction_id" value="<?= $editformdata[0]->transaction_id ?>" >
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
                            <button class="btn btn-success btn-sm hstack" name="submitbtn" type="submit" id="submitbtn">Update Form</button>
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
        $(document).on('submit', '#update_form', function(ev) {
            $('.error').html('');

            ev.preventDefault(); // Prevent browers default submit.
            var formData = new FormData(this);
            var error = false;

            if (error == false) {
                $.ajax({
                    url: "<?= base_url('admin/updateform'); ?>",
                    type: 'post',
                    data: formData,
                    success: function(result) {
                        // json data
                        var dataResult = JSON.parse(result);
                       
                        if (dataResult.done == '1') {
                           
                            swal('Student Details Updated 🙂', ' ', 'success');
                            setTimeout(function() {
                                location.reload(true);
                            }, 1000);
                        }

                        if (dataResult.done == '0') {
                            
                            swal('Student Details Not Updated ☹️', ' ', 'error');

                           

                        }

                       

                    },
                    cache: false,
                    contentType: false,
                    processData: false,
                })

            }

        })
    </script>
    