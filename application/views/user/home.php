      <!-- **********************************************************************************************************************************************************
      MAIN CONTENT
      *********************************************************************************************************************************************************** -->
      <!--main content start-->
      <section id="main-content">
          <section class="wrapper site-min-height">
            <div id="page-wrapper">
              <br>
              <div class="row">
                <div class="col-md-4">
                  <select class="form-control">
                      <option>Sort By</option>
                      <option>Soal</option>
                      <option>Jawaban</option>                      
                  </select>
                  </div>
                </div>
              </div>
              <br>
            	<div class="row">
            		<div class="col-md-4">
            		  <!-- /.panel -->
                  <div class="list-panel panel panel-default">
                      <div class="panel-heading">
                          <i class="fa fa-comments fa-fw"></i>
                          Murid
                      </div>
                      <!-- /.panel-heading -->
                      <div class="panel-body">
                          <ul class="list">
                              <li class="left clearfix">
                                  <span class="list-img pull-left">
                                      <img src="http://placehold.it/50/55C1E7/fff" alt="User Avatar" class="img-circle" />
                                  </span>
                                  <div class="list-body clearfix">
                                      <div>
                                          <strong class="primary-font">Jack Sparrow</strong>
                                          <small class="pull-right text-muted">
                                              <i class="fa fa-clock-o fa-fw"></i> 12 mins ago
                                          </small>
                                      </div>
                                      <p>
                                          Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur bibendum ornare dolor, quis ullamcorper ligula sodales.
                                      </p>
                                  </div>
                              </li>
                              <li class="right clearfix">
                                  <span class="list-img pull-right">
                                      <img src="http://placehold.it/50/FA6F57/fff" alt="User Avatar" class="img-circle" />
                                  </span>
                                  <div class="list-body clearfix">
                                      <div>
                                          <small class="text-muted">
                                              <i class="fa fa-clock-o fa-fw"></i> 13 mins ago</small>
                                          <strong class="pull-right primary-font">Bhaumik Patel</strong>
                                      </div>
                                      <p>
                                          Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur bibendum ornare dolor, quis ullamcorper ligula sodales.
                                      </p>
                                  </div>
                              </li>
                              <li class="left clearfix">
                                  <span class="list-img pull-left">
                                      <img src="http://placehold.it/50/55C1E7/fff" alt="User Avatar" class="img-circle" />
                                  </span>
                                  <div class="list-body clearfix">
                                      <div>
                                          <strong class="primary-font">Jack Sparrow</strong>
                                          <small class="pull-right text-muted">
                                              <i class="fa fa-clock-o fa-fw"></i> 14 mins ago</small>
                                      </div>
                                      <p>
                                          Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur bibendum ornare dolor, quis ullamcorper ligula sodales.
                                      </p>
                                  </div>
                              </li>
                              <li class="right clearfix">
                                  <span class="list-img pull-right">
                                      <img src="http://placehold.it/50/FA6F57/fff" alt="User Avatar" class="img-circle" />
                                  </span>
                                  <div class="list-body clearfix">
                                      <div>
                                          <small class=" text-muted">
                                              <i class="fa fa-clock-o fa-fw"></i> 15 mins ago</small>
                                          <strong class="pull-right primary-font">Bhaumik Patel</strong>
                                      </div>
                                      <p>
                                          Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur bibendum ornare dolor, quis ullamcorper ligula sodales.
                                      </p>
                                  </div>
                              </li>
                          </ul>
                      </div>
                      <!-- /.panel-body -->
                      <!-- <div class="panel-footer">
                          <div class="input-group">
                              <input id="btn-input" type="text" class="form-control input-sm" placeholder="Type your message here..." />
                              <span class="input-group-btn">
                                  <button class="btn btn-warning btn-sm" id="btn-list">
                                      Send
                                  </button>
                              </span>
                          </div>
                      </div> -->
                      <!-- /.panel-footer -->
                  </div>
                  <!-- /.panel .list-panel -->
            		</div>
                <div class="col-md-4 vertical-center">
                  <button class="btn btn-success centre btn-lg btn-block" data-toggle="modal" data-target="#myModal">
                      <i class="fa fa-plus-circle fa-fw"></i> Ajukan Pertanyaan
                  </button>
                </div>
                <!-- Modal -->
                
                <div class="modal fade" id="myModal" role="dialog">
                  <div class="modal-dialog">
                    <!-- Modal content-->
                    <form class="form-login" id="submit_question">
                      <div class="modal-content">
                        <div class="modal-header">
                          <button type="button" class="close" data-dismiss="modal">&times;</button>
                          <h4 class="modal-title">Pertanyaan</h4>
                        </div>
                        <div class="modal-body">
                          <div class = "form-group">
                            <input type="text" class="form-control" placeholder="Judul" name="judul_pertanyaan" required>
                          </div>
                          <div class = "form-group">
                            <textarea class = "form-control" rows="4" placeholder="Pertanyaan" name="keterangan_pertanyaan" required></textarea>
                          </div>
                          <div class = "form-group">
                            <input type="file" name="image_pertanyaan">
                          </div>
                          <div class = "form-group">
                            <select class="form-control" name="">
                                <option value=''>Tipe Penyelesaian</option>
                                <option value='soal'>Soal</option>
                                <option value='jawaban'>Jawaban</option>                      
                            </select>
                          </div>
                          <div class = "form-group">
                            <select class="form-control" name="topik_pertanyaan">
                                <option value=''>Mata Pelajaran</option>
                                <option value='IPA'>IPA</option>
                                <option value='IPS'>IPS</option>                      
                            </select>
                          </div>
                        </div>
                        <div class="modal-footer">
                          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                          <button type="button" class="btn btn-primary" onclick="submit_question();">Submit</button>
                        </div>
                      </div>
                    </form>
                  </div>
                </div>
                
                <div class="col-md-4">
                  <!-- /.panel -->
                  <div class="list-panel panel panel-default">
                      <div class="panel-heading">
                          <i class="fa fa-comments fa-fw"></i>
                          Guru
                      </div>
                      <!-- /.panel-heading -->
                      <div class="panel-body">
                          <ul class="list">
                              <li class="left clearfix">
                                  <span class="list-img pull-left">
                                      <img src="http://placehold.it/50/55C1E7/fff" alt="User Avatar" class="img-circle" />
                                  </span>
                                  <div class="list-body clearfix">
                                      <div>
                                          <strong class="primary-font">Jack Sparrow</strong>
                                          <small class="pull-right text-muted">
                                              <i class="fa fa-clock-o fa-fw"></i> 12 mins ago
                                          </small>
                                      </div>
                                      <p>
                                          Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur bibendum ornare dolor, quis ullamcorper ligula sodales.
                                      </p>
                                  </div>
                              </li>
                              <li class="right clearfix">
                                  <span class="list-img pull-right">
                                      <img src="http://placehold.it/50/FA6F57/fff" alt="User Avatar" class="img-circle" />
                                  </span>
                                  <div class="list-body clearfix">
                                      <div>
                                          <small class="text-muted">
                                              <i class="fa fa-clock-o fa-fw"></i> 13 mins ago</small>
                                          <strong class="pull-right primary-font">Bhaumik Patel</strong>
                                      </div>
                                      <p>
                                          Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur bibendum ornare dolor, quis ullamcorper ligula sodales.
                                      </p>
                                  </div>
                              </li>
                              <li class="left clearfix">
                                  <span class="list-img pull-left">
                                      <img src="http://placehold.it/50/55C1E7/fff" alt="User Avatar" class="img-circle" />
                                  </span>
                                  <div class="list-body clearfix">
                                      <div>
                                          <strong class="primary-font">Jack Sparrow</strong>
                                          <small class="pull-right text-muted">
                                              <i class="fa fa-clock-o fa-fw"></i> 14 mins ago</small>
                                      </div>
                                      <p>
                                          Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur bibendum ornare dolor, quis ullamcorper ligula sodales.
                                      </p>
                                  </div>
                              </li>
                              <li class="right clearfix">
                                  <span class="list-img pull-right">
                                      <img src="http://placehold.it/50/FA6F57/fff" alt="User Avatar" class="img-circle" />
                                  </span>
                                  <div class="list-body clearfix">
                                      <div>
                                          <small class=" text-muted">
                                              <i class="fa fa-clock-o fa-fw"></i> 15 mins ago</small>
                                          <strong class="pull-right primary-font">Bhaumik Patel</strong>
                                      </div>
                                      <p>
                                          Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur bibendum ornare dolor, quis ullamcorper ligula sodales.
                                      </p>
                                  </div>
                              </li>
                          </ul>
                      </div>
                      <!-- /.panel-body -->
                      <!-- <div class="panel-footer">
                          <div class="input-group">
                              <input id="btn-input" type="text" class="form-control input-sm" placeholder="Type your message here..." />
                              <span class="input-group-btn">
                                  <button class="btn btn-warning btn-sm" id="btn-list">
                                      Send
                                  </button>
                              </span>
                          </div>
                      </div> -->
                      <!-- /.panel-footer -->
                  </div>
                  <!-- /.panel .list-panel -->
                </div>
            	</div>
            </div>
		      </section>
      </section><!-- /MAIN CONTENT -->

      <!--main content end-->
      <!--footer start-->
      <footer class="site-footer">
          <div class="text-center">
              2014 - Alvarez.is
              <a href="blank.html#" class="go-top">
                  <i class="fa fa-angle-up"></i>
              </a>
          </div>
      </footer>
      <!--footer end-->

  </section>

    <!-- js placed at the end of the document so the pages load faster -->
    <script src="assets/js/jquery.js"></script>
    <script src="assets/js/bootstrap.min.js"></script>
    <script src="assets/js/jquery-ui-1.9.2.custom.min.js"></script>
    <script src="assets/js/jquery.ui.touch-punch.min.js"></script>
    <script class="include" type="text/javascript" src="assets/js/jquery.dcjqaccordion.2.7.js"></script>
    <script src="assets/js/jquery.scrollTo.min.js"></script>
    <script src="assets/js/jquery.nicescroll.js" type="text/javascript"></script>


    <!--common script for all pages-->
    <script src="assets/js/common-scripts.js"></script>

    <!--script for this page-->
    
  <script>
      //custom select box

      $(function(){
          $('select.styled').customSelect();
      });

  </script>

  </body>
</html>
