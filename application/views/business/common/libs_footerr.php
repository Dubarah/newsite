
    <script src="<?php echo base_url()?>ass/js/jquery.min.js"></script>
    <script src="<?php echo base_url() ?>ass/js/select2.js"></script>
    <script src="<?php echo base_url()?>ass/js/sweetalert.min.js"></script>
    <script src="<?php echo base_url() ?>ass/js/toastr.min.js"></script>

  <script type="text/javascript" src="<?php echo base_url() ?>asset/moment.js"></script>
 <script type="text/javascript" src="<?php echo base_url() ?>asset/datetime/js/tempusdominus-bootstrap-4.min.js"></script>


    <!-- <script src="<?php echo base_url() ?>asset/datetime/bootstrap-timepicker.min.js"></script> -->

        <script type="text/javascript">
            $(document).ready(function() {
                <?php if ($this->session->userdata('suc_message') || $this->session->userdata('err_message')) { ?>

                    <?php if ($this->session->userdata('err_message')) { ?>
                        title = '<?php echo trans('fail'); ?>';
                        text  = '<?php echo $this->session->userdata('err_message'); $this->session->unset_userdata('err_message'); ?>';
                        type  = 'error';
                    <?php } ?>
                    <?php if ($this->session->userdata('suc_message')) { ?>
                        title = '<?php echo trans('success'); ?>';
                        text  = '<?php echo $this->session->userdata('suc_message'); $this->session->unset_userdata('suc_message'); ?>';
                        type  = 'success';
                    <?php } ?>
                    swal({
                        title: title,
                        text: text,
                        type: type,
                        timer: 6000,
                        html: true,
                        showConfirmButton:true
                    });

                <?php } ?>
            });
        </script>
    <script src="<?php echo base_url()?>asset/js/popper.min.js" ></script>
    <script src="<?php echo base_url()?>asset/js/bootstrap.min.js"  ></script>
    <script src="<?php echo base_url()?>asset/js/additional.js"></script>
    <!-- script for dynamic city insert #PE$$-->
    
     

  <script type="text/javascript">
      function add_new_row(type ,i) { 
        //// ========================== Create ===============
        if(type == "rowTime"){
        row="<ul class='list-inline' id='time_row"+i+"'>" +
          "<div class='list-inline-item'>" +
         "<select class='form-control tmCls' name='day"+i+"' id='day"+i+"' ><option value='Sun'>Sunday</option><option value='Mon'>Monday</option><option value='Tue'>Tuesday</option><option value='Wed'>Wednsday</option><option value='Thu'>Thursday</option><option value='Fri'>Friday</option><option value='Sat'>Saturday</option></select>" +
          "</div><div class='list-inline-item'>" +
           
          "<div class='bootstrap-timepicker'><div class='form-group'><div class='input-group'><input type='text'  name='timeFrom"+i+"' "+ "id='timeFrom"+i+"' class='form-control timepicker tmCls' placeholder='9:00 am '><div class='input-group-addon'><i class='fa fa-clock-o'></i></div></div></div></div>" +

          "<div class='bootstrap-timepicker'><div class='form-group'><div class='input-group'><input type='text'  name='timeto"+i+"' "+ "id='timeto"+i+"' class='form-control timepicker tmCls' placeholder='5:00 pm '><div class='input-group-addon'><i class='fa fa-clock-o'></i></div></div></div></div>" +
          // "</div><div class='list-inline-item'>" +
          // "<input type='text' name='timeto"+i+"' id='timeto"+i+"' class='form-control' placeholder='5:00 pm'>  " +
          "</div>" +
          "</ul>" ;
        $("#timesContainer").append(row);
        $("#timesCount").val(i);
        }else if(type === "rowFaq"){
          row='<div id="faq_row'+i+'"><input type="text" name="question'+i+'" id="question'+i+'" class="form-control faqCls" placeholder="Question: Ex. What the special about your business">'+
              '<dir class="clear"> </dir>'+
              '<input type="text" name="answer'+i+'" id="answer'+i+'" class="form-control faqCls" placeholder="Answer: We have special and famys recipe since "></div><dir class="clear"> </dir><dir class="clear"> </dir>';
         $("#faqsContainer").append(row);
         $("#faqsCount").val(i);
        }
        $('.timepicker').timepicker({   showInputs: false   });
      }
      function add_edit_row(type ,i, data) { 
        //// ========================== Create ===============
        if(type == "rowTime"){
        row="<div class=' row form-group'><ul class='list-inline' id='time_row"+i+"'>" +
          "<div class='list-inline-item'>" +
          "<select class='form-control tmCls' name='day"+i+"' id='day"+i+"' ><option value='Sun'>Sunday</option><option value='Mon'>Monday</option><option value='Tue'>Tuesday</option><option value='Wed'>Wednsday</option><option value='Thu'>Thursday</option><option value='Fri'>Friday</option><option value='Sat'>Saturday</option></select>" +
          "</div><div class='list-inline-item'>" +

          "<div class='bootstrap-timepicker'><div class='input-group'><input type='text'  value='"+data[1]+"' name='timeFrom"+i+"' "+ "id='timeFrom"+i+"' class='form-control timepicker tmCls' placeholder='9:00 am '><div class='input-group-addon'><i class='fa fa-clock-o'></i></div></div></div>" +

          "<div class='bootstrap-timepicker'><div class='input-group'><input type='text'  value='"+data[2]+"' name='timeto"+i+"' "+ "id='timeto"+i+"' class='form-control timepicker tmCls' placeholder='5:00 pm '><div class='input-group-addon'><i class='fa fa-clock-o'></i></div></div></div></div>" +
          "</div>" +
          "</ul>" ;
        $("#timesContainer").append(row);
        /// To check if edit
        $("#day"+i).val(data[0])
        $("#timesCount").val(i);
        }else if(type === "rowFaq"){
          row='<div id="faq_row'+i+'"><input type="text" value="'+data[0]+'" name="question'+i+'" id="question'+i+'" class="form-control faqCls" placeholder="Question: Ex. What the special about your business">'+
              '<dir class="clear"> </dir>'+
              '<input type="text"  value="'+data[1]+'" name="answer'+i+'" id="answer'+i+'" class="form-control faqCls" placeholder="Answer: We have special and famys recipe since "></div><dir class="clear"> </dir><dir class="clear"> </dir>';
         $("#faqsContainer").append(row);
         $("#faqsCount").val(i);
        }
        $('.timepicker').timepicker({   showInputs: false   });
      }
      function add_edit_logic() {
        <?php 
        if (isset($busin_datetimes))
        { $i= 1 ;
          foreach ($busin_datetimes as $dt ) { ?>
            add_edit_row("rowTime" ,<?=$i?> , [ '<?=$dt->day?>','<?=$dt->timefrom?>','<?=$dt->timeto?>' ]);
          <?php $i++; }
        }
        if ( isset($busin_faq) )
        { $i= 1 ;
          foreach ($busin_faq as $faq ) { ?>
          add_edit_row("rowFaq" ,<?=$i?> , [ '<?=$faq->ask?>' , '<?=$faq->answer?>' ]);
        <?php $i++; }
        }
        ?>
        return; 
      }
      function add_init_row() {
        input_status = $("#input_status").html();
        if('business-edit' == input_status){
            add_edit_logic();
            $("#is_edit").val(1);
            run_city_checker();
            run_catigory_checker();
        }else{
          $('#isOwner1').prop('checked', true);
          ///----------- TIMES
          $("#timesCount").val(1);
          add_new_row("rowTime" ,1);
          ///----------- FAQ 
          $("#faqsCount").val(1);
          add_new_row("rowFaq" ,1);
        }
      }
      function delete_row(type , index) {
        console.log(index);
        if( parseInt(index) != 1 ){
            if(type == "time_row"){
              $("#time_row"+index).remove(); 
              $("#timesCount").val(index-1);
            }else if(type == "faq_row"){
              $("#faq_row"+index).remove();
              $("#faqsCount").val(index-1);
            }
        }else{
          swal('Cannot remove this !!')
        }
      }
      function check_isempty_exist(elemntsClss) {
        ls = $("."+elemntsClss[0]);
        for (var i = 0; i < ls.length; i++) {
         if(  $(ls[i]).val() =="" )
          return true;
        }
        return false;
      }
      function run_catigory_checker() {
        ids = $("#categorylist_callback").val();
        catId = $("#category_callback").val();
        $("#category_prnt").select2("val", catId);
        category_changed(catId , ids);
      }
      function run_city_checker() {
        elm = $("#country-select").val() ; 
        id = $("#city_callback").val();
        country_changed(elm,  parseInt(id) );
      }
      //-----------
       $(document).ready(function () {

        ///----------------- add times
          $("#addTimes").click(function (e) {
            if( ! check_isempty_exist(['tmCls']) )  
            { indx=$("#timesCount").val();
              add_new_row("rowTime",parseInt(indx)+1);
            }else{
              swal('Adding While other fields empty')
            }
          });
          ///----------------- add faq
          $("#addFaqs").click(function (e) {
            if( ! check_isempty_exist(['faqCls']) )
            { indx=$("#faqsCount").val();
              add_new_row("rowFaq",parseInt(indx)+1);
            }else{
              swal('Adding While other fields empty')
            }
          });
          $("#delTimes").click(function (e) {
            indx=$("#timesCount").val();
            delete_row("time_row",parseInt(indx));
          });
          $("#delFaqs").click(function (e) {
            indx=$("#faqsCount").val();
            delete_row("faq_row",parseInt(indx));
          });
          //---------------------------------------
        });
  </script>
  <script type="text/javascript">
      function get_catgos(id){
         category_changed(id);
        }
  </script>
    <script type ="text/JavaScript">
        function category_changed(id , slctd = -1 ){
          $("#category_sub").select2("val", "")
          $.ajax({
              url: '<?php echo base_url()?>get_busin_category/' +  id,
              success: function(data) {
                  if (data) {
                      $("#category_sub").html("" + data);
                      if(slctd != -1 ){
                        list = slctd.split(',');
                        list.splice(-1,1); new_arr = [];
                        for (var i = 0; i < list.length; i++) {
                          new_arr.push( parseInt(list[i]) );
                        }
                        $("#category_sub").select2('val', new_arr);
                      }
                  };
              }
          });
        }
        function country_changed(val , slctd = -1 ){
           $.ajax({
                url: '<?php echo base_url()?>get_city/' + val,
                success: function(data) {
                    if (data) {
                        $("#city-select").html( data);
                        //// "<option disabled selected> Select City </option>" +
                        if(slctd != -1 )
                          $("#city-select").val(slctd);
                    };
                }
            });
        }
        $(document).ready(function () {
           $("#country-select").change(function(){
              country_changed($(this).val());
          });
          $("#city-select").change(function(){
            $("#city-country, #city-country2, #city-country3").text($("#country-select option:selected").text()+", " +$("#city-select option:selected").text());
          });
          ///======================= category_sub
          // $("#category_sub").on("select2-selecting", function(e) {
          //     //$("#search_code").select2("data",e.choice);
          //     //alert( e.choice );
          //     console.log(e.choice);
          // });
          ///====================///==========================


         
          $("#image-input1, #image-input2, #image-input3, #image-input4, #image-input5, #image-input6")
          .change( function(){  switch(true){
                case $(this).is("#image-input1"):
                    readURLImgs(this,"#image-1");
                    break;
                case $(this).is("#image-input2"):
                    readURLImgs(this,"#image-2");
                    break;
                case $(this).is("#image-input3"):
                    readURLImgs(this,"#image-3");
                    break;
                case $(this).is("#image-input4"):
                    readURLImgs(this,"#image-4");
                    break;
                case $(this).is("#image-input5"):
                    readURLImgs(this,"#image-5");
                    break;
                case $(this).is("#image-input6"):
                    readURLImgs(this,"#image-6");
                    break;
                default:
                    console.log("none of those photos been clicked");
                    break;     };
          });
          //user 8 images delete #PE$$
          $("#image-del1, #image-del2, #image-del3, #image-del4, #image-del5, #image-del6").click(function(){
                switch(true){
                case $(this).is("#image-del1"):
                    $("#image-input1").val("");
                    $("#image-1").attr("src", "<?php echo base_url()?>asset/imgs/demo-img.png")
                    break;
                case $(this).is("#image-del2"):
                    $("#image-input2").val("");
                    $("#image-2").attr("src", "<?php echo base_url()?>asset/imgs/demo-img.png")
                    break;
                case $(this).is("#image-del3"):
                    $("#image-input3").val("");
                    $("#image-3").attr("src", "<?php echo base_url()?>asset/imgs/demo-img.png")
                    break;
                case $(this).is("#image-del4"):
                    $("#image-input4").val("");
                    $("#image-4").attr("src", "<?php echo base_url()?>asset/imgs/demo-img.png")
                    break;
                case $(this).is("#image-del5"):
                    $("#image-input5").val("");
                    $("#image-5").attr("src", "<?php echo base_url()?>asset/imgs/demo-img.png")
                    break;
                case $(this).is("#image-del6"):
                    $("#image-input6").val("");
                    $("#image-6").attr("src", "<?php echo base_url()?>asset/imgs/demo-img.png")
                    break;
                default:
                    console.log("none of those photos been deleted");
                    break;   
            };
          });
          //logo image delete #PE$$
          $("#logo-del").click(function(){
            $("#profile-upload").css("background-image", "url('<?php echo base_url().'ass/images/image_profile.jpg' ?>')");
            $('#logo_valhide').val("");
            // $("#n_logo, #n_logo2, #n_logo3").attr("src","http://via.placeholder.com/100x100");  
          });
           $("#cover-del").click(function(){
            $("#cover-upload").css("background-image", "url('<?php echo base_url().'ass/images/image_profile.jpg' ?>')");
            $('#cover_valhide').val("");
            // $("#n_logo, #n_logo2, #n_logo3").attr("src","http://via.placeholder.com/100x100");  
          });
          getval= document.getElementById('getval');
          if(getval)
          getval.addEventListener('change', readURL_Profile, true);
          getvalCover= document.getElementById('getval-cover');
          if(getvalCover)
          getvalCover.addEventListener('change', readURL_COVER, true);
        });
        function isImgAllowed(fileSz) {
          maxSize = 6000; /// 6 MB
          bool = false;
          filesize = bytesToSizeInKB(fileSz);
          //console.log(filesize);
          if(filesize < maxSize)
            bool= true;
          /// width -  height
          //var width = img.clientWidth;
          //var height = img.clientHeight;
          return bool;
        }
        function bytesToSizeInKB(bytes) { 
          var sizes = ['B']; //-->> , 'K' | 'M' , 'G', 'T', 'P'
          for (var i = 0; i < sizes.length; i++) {
            if (bytes <= 1024) {
              return bytes ; //+ ' ' + sizes[i];
            } else {
              bytes = parseFloat(bytes / 1024).toFixed(2)
            }
          }
          return bytes ;//+ ' P';
        }
         //user 8 images dynamic change #PE$$
        function readURLImgs(input, img) {  
          console.log("imgs size " + isImgAllowed(input.files[0].size));
            if (input.files && input.files[0] && isImgAllowed(input.files[0].size)) {
              var reader = new FileReader();
              reader.onload = function(e) {
                $(img).attr('src', e.target.result);
              }
              reader.readAsDataURL(input.files[0]);
            }else{
            swal(' Uploading problem  Or size problem');
          }
        }
        function readURL_COVER() {
          var file = document.getElementById("getval-cover").files[0];
          console.log(file.size);
          if(isImgAllowed(file.size))
          {
             readURL("C",file);
          }else{
            swal(' Image size Problem !!');
          }
        }
        function readURL_Profile(argument) {
          var file = document.getElementById("getval").files[0];
          if(isImgAllowed(file.size))
          {
            readURL("P",file);  
          }else{
            swal(' Image size Problem !!');
          }
        }
        function readURL(TYPE , file){
            var reader = new FileReader();
            reader.onloadend = function(){ 
              if(TYPE === "P")
              {document.getElementById('profile-upload').style.backgroundImage = "url(" + reader.result + ")";
              $('#logo_valhide').val(reader.result);
              }else if(TYPE === "C")
              {
                console.log(TYPE);
                document.getElementById('cover-upload').style.backgroundImage 
                        = "url(" + reader.result + ")";
                document.getElementById('cover-upload-card').src =reader.result;
                $('#cover_valhide').val(reader.result);
              }
            }
            if(file){
                reader.readAsDataURL(file);
            }else{
            }
        }        
    </script>

    <script type="text/javascript">
       function fill_init_data_card() {
       /// categories
        cs = $("#category_sub").select2('data'); cats = "";
        for (var i = 0; i < cs.length; i++) {
          cats += cs[i].text + " , <br/> " ;
        }
       $("#card_cates").html(cats) ;
       /// country
       // flag = 
       // $("#card_flg").addClass('flag-'+flag);
      }
        $(document).ready(function(){
            $( ".select2MaX3" ).select2( {  maximumSelectionSize: 3 } );
            $( ".select2" ).select2( );
            $(".tab-content#business-tab-content")
             .on("click", "#business-submit ,#business-next-step1, #business-next-step2 , #business-next-step3",function(e){
              e.preventDefault();
              swal({
              title: "Checking Data...",
              text: "Please wait",
              imageUrl: "<?php echo base_url()?>asset/imgs/loading_icon.gif",
              showConfirmButton: false,
              allowOutsideClick: false ,
              timer : 500,   });
              stepNo = 1;
              switch(true){ 
                    case $(this).is("#business-submit"):
                        stepNo= 4;
                        console.log("step 4 " + stepNo);
                        break;
                    case $(this).is("#business-next-step3"):
                        stepNo= 3;
                        console.log("step 3 " + stepNo);
                        break;
                    case $(this).is("#business-next-step2"):
                        stepNo= 2;
                        console.log("step 2 " + stepNo);
                        fill_init_data_card();
                        break;
                    default:
                        stepNo= 1;                    
                        console.log("none");
                        break;
                }
                if(stepNo == 3)
                {
                  lgo = $("#profile-upload").css("background-image");
                  cov = $("#cover-upload").css("background-image");
                  default_img = 'url("<?php echo base_url()?>ass/images/image_profile.jpg")';
                  if( cov == default_img || lgo == default_img ){ //LOGO_SCRLL                   
                    //swal("Logo & Cover are mandatory inputs, please check... !!");

                    return;
                  }
                }
                //console.log(  $("#category_sub"). val()  ) ;
                //console.log($("#category").val());
               // return;
                link = '<?php echo base_url()?>business-adding/' + stepNo;
                frmdata = $('#theForm').find('#section_bus'+ --stepNo)
                          .find('input , textarea , select') ;  
                if(stepNo === 2){
                  imgs = $('#theForm').find('#section_bus2').find('img.myInputedImgs');
                  formDataList = [] ;// new FormData();
                  imgs_str="" ;
                  for ( i = 0; i < imgs.length ; i++) {
                     string = $(imgs[i]).attr('src');
                     if(  string.includes( 'demo-img.png' )  === false  )
                     {
                      imgs_str =  string  + "|"  + imgs_str ;
                     }
                  }
                  if(imgs_str !== ""){
                    $("#MyImgsData").val(imgs_str);
                  }
                  ///-------- logo & cover
                  $('#logo_valhide').val()
                  $('#cover_valhide').val()
                }
                  formDataList = frmdata.serialize() ;
                  console.log(formDataList);
                   $.post( link ,  formDataList ).done(function( data ) {
                        processfrom(data);
                  });
                function processfrom(data) 
                {
                    console.log(data); //return;
                    res = JSON.parse(data);
                    if (res[0]) {
                        if(res[1]=="step2"){
                            swal({
                                title: 'Validated!',
                                text: ' Turn to Next Step.',
                                type: 'success',
                                timer: 3000,
                                html: true,
                                showConfirmButton:true
                            });
                         $("#step1").removeClass("active");
                         $("#step2").addClass("active");
                         document.getElementById("step2").scrollIntoView(true);
                        }else if(res[1]=="step3"){
                            //set_validate()
                            swal({
                                title: 'Validated!',
                                text: ' Turn to Next Step.',
                                type: 'success',
                                timer: 3000,
                                html: true,
                                showConfirmButton:true
                            });
                         $("#step2").removeClass("active");
                         $("#step3").addClass("active");
                         document.getElementById("step3").scrollIntoView(true);
                        }else if(res[1]=="step4"){
                              console.log(res);
                                 swal({
                                    title: 'Done!',
                                    text: 'Ahead to the next step.',
                                    type: 'success',
                                    timer: 6000,
                                    html: true,
                                    showConfirmButton:true
                                    });
                                 $("#step3").removeClass("active");
                                 $("#step4").addClass("active");
                                 document.getElementById("step4").scrollIntoView(true);
                        }else{  swal("STH STEPS WORNG");   }
                    } else{ 
                         swal({
                                title: 'Not validate!',
                                text: 'Please complete the required files.',
                                type: 'error',
                                timer: 6000,
                                html: true,
                                showConfirmButton:true
                            });
                            // console.log('errors');
                            errors = res[2];
                            lisVal = $(".lst_spn_val");
                            for (var i = 0; i < lisVal.length; i++) {
                              cid= $(lisVal[i]).attr('id');
                              c= $(lisVal[i]).attr('id').replace('v-','');
                              
                                if(errors[c]  != ""){
                                    $("input[name='"+c+"']").removeClass("validate");
                                    $("#"+ cid).html(errors[c]);
                                    $("#"+ cid).addClass(" invalid ");
                                    console.log( c );
                                }else{
                                    $("input[name='"+c+"']").addClass("validate");
                                    $("#"+ cid).html("");
                                    $("#"+ cid ).removeClass(" invalid ");
                                }
                            } 
                      }
                }
                $("#prev-to-step2").click(function(){
                    $("#step3").removeClass('active');
                    $("#step2").addClass('active');
                    document.getElementById("step2").scrollIntoView(true);
                });
                $("#prev-to-step1").click(function(){
                    $("#step2").removeClass('active');
                    $("#step1").addClass('active');
                    document.getElementById("step1").scrollIntoView(true);
                });
            });

        });
    </script>
    <script type="text/javascript">
      $(document).ready(function () {
          $('body').click(function(){
            $("#search_busi_res").html("")
          });
          $("#search_busi_name_btn").click(function (e) {
            name =$("#search_busi_name").val();
            if(name != "" )
            {
                link = '<?php echo base_url()?>business-checkbyname/' + name;
                $.post( link ,  [] ).done(function( data ) {
                  //console.log(data);
                      res = JSON.parse(data);
                      if(res[0]){ 
                        cc  = "<div> <i class='fa text-success fa-check'></i> "
                                +res[1]+" </div>"
                        }
                      else{
                        cc  = "<div> <i class='fa text-danger fa-remove'></i> "
                              +res[1]+" </div>"
                      }
                      $("#search_busi_res").html(cc);
                });
            }else{
              swal("Empty inputs !!");
            }
          });
      })
    </script>
<script type="text/javascript">
  $(document).ready(function () {
    add_init_row();

  })
</script>