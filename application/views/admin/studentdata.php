<?php
$id = $this->session->userdata('id');

if (!$id) {
    redirect('/login');
}

?>

<?php include('header.php') ?>
<script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>

<div class="main-panel">
    <div class="content-wrapper">
        <div class="row">
            <div class="col-lg-12 grid-margin stretch-card">
                <div class="card">
                    <div class="card-body">
                        <h4 class="card-title">Student Details</h4>

                        <div class="row">
                            <div class="col-md-6">

                                <select name="class" class="form-control" style="width: 50%" id="class" onchange=show_data(this.value)>
                                    <option  value="" selected>Select Class</option>
                                    <option value="Nursery">Nursery</option>
                                    <option value="KG">KG</option>
                                    <option value="1st">1st</option>
                                    <option value="2nd">2nd</option>
                                    <option value="3rd">3rd</option>
                                    <option value="4th">4th</option>
                                    <option value="5th">5th</option>
                                    <option value="6th">6th</option>
                                    <option value="7th">7th</option>
                                    <option value="8th">8th</option>
                                    <option value="9th">9th</option>
                                    <option value="10th">10th</option>
                                    <option value="11th">11th</option>
                                    <option value="12th">12th</option>
                                </select>
                            </div>
                            <div class="col-md-6">
                                <div class="input-group" style="width:50%;float:right">
                                    <input type="text" class="form-control" placeholder="Enter Child Name For Search" onkeydown=search_func(); onkeyup="search_func(this.val)" class="searchdata" id="searchdata" >
                                    <!-- <div class="input-group-append">
                                        <button class="btn btn-primary"  type="button">
                                            <i class="fa fa-search"></i>
                                        </button>
                                    </div> -->
                                </div>
                            </div>
                        </div>
                        <div class="table-responsive" id="data" style="display:block;">
                            <table class="table table-responsive table-bordered table-striped" id="example">
                                <thead>
                                    <tr>
                                        <th>S.No. </th>
                                        <th>Date</th>
                                        <th>Name</th>
                                        <th>Class</th>
                                        <th>Father Name</th>
                                        <th>Mother Name</th>
                                        <th>Phone</th>
                                        <th>Address</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody class="datashow" >
                                    <?php
                                    foreach ($studentinfo as $value) {
                                    ?>
                                        
                                        <tr class="item">
                                            <td><?php echo $value->serial_no; ?></td>
                                            <td><?php echo $value->created_at; ?></td>
                                            <td><?php echo $value->name; ?></td>
                                            <td><?php echo $value->class; ?> </td>
                                            <td><?php echo $value->fathername; ?> </td>
                                            <td><?php echo $value->mothername; ?> </td>
                                            <td><?php echo $value->telno; ?></td>
                                            <td><?php echo $value->address; ?> </td>
                                            <td>
                                                <a href="<?= base_url() ?>admin/editformdata/<?= $value->id ?>"><i class="fas fa-eye"></i></a>
                                                <a href="<?= base_url() ?>admin/editform/<?= $value->id ?>"><i class="	fas fa-pencil-alt"></i></a>
                                            </td>
                                        </tr>
                                        
                                    <?php
                                    }
                                    ?>

                                </tbody>

                                
                            </table>

                           
                        </div>
                       
                    </div>
                </div>
            </div>
        </div>



    </div>
</div>

<script>
    $(document).ready(function() {
        $('#data').after('<div id="pagination" class="pagination"></div>');
        var rowsShown = 5;
        var rowsTotal = $('#data tbody tr').length;
        var numPages = rowsTotal / rowsShown;
        for (i = 0; i < numPages; i++) {
            var pageNum = i + 1;
            $('#pagination').append('<a href="#" rel="' + i + '">' + pageNum + '</a> ');
        }
        $('#data tbody tr').hide();
        $('#data tbody tr').slice(0, rowsShown).show();
        $('#pagination a:first').addClass('active');
        $('#pagination a').bind('click', function() {
            $('#pagination a').removeClass('active');
            $(this).addClass('active');
            var currPage = $(this).attr('rel');
            var startItem = currPage * rowsShown;
            var endItem = startItem + rowsShown;
            $('#data tbody tr').css('opacity', '0.0').hide().slice(startItem, endItem).
            css('display', 'table-row').animate({
                opacity: 1
            }, 300);
        });
    });
</script>
<script>
  function show_data(str){
    $.ajax({
                url: "<?= base_url('admin/selectedclass') ?>",
                type: "post",
                data: {
                    str: str
                },
                success: function(result) {
                
                    $(".datashow").html(result);
                }
            })
  }
</script>
<!-- <script type="text/javascript">
    $("#search").keyup(function () {
        $.ajax({
      type: "POST",
      url: "<?= base_url('admin/search') ?>",
      data: ({string: $("#search").val()}),
      success: function(data) {
        $(".datashow").show();  
       $(".datashow").html(data); 
       $('.datashow > tr > ').click(function(){
        var search_resultList = $(this).text();
        $("#search").val(search_resultList); 
        $(".datashow").hide();         
      });
      }      
    }); 
   });
    </script> -->
    <script>
        function search_func()
{
    var str = $('#searchdata').val();

    $.ajax({
       type: "POST",
       url: "<?= base_url('admin/search') ?>",
       data: {str : str},
      
       success: function(result){
        $(".datashow").html(result);
                   //Receiving the result of search here
       }
    });
}
    </script>