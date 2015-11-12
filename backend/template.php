<!-- Latest compiled and minified CSS & JS -->
<link rel="stylesheet" media="screen" href="<?php
echo plugins_url('../lib/css/bootstrap.min.css', __file__); ?>">
<script src="<?php
echo plugins_url('../lib/js/bootstrap.min.js', __file__); ?>"></script>
<script type="text/javascript">
 var gif = "<?php echo plugins_url('/../img/ajax-loading.gif', __FILE__); ?>"; 
</script>

<script type="text/javascript" src="<?php echo plugins_url('/../lib/js/ajax-loading.js', __FILE__); ?>"></script>
 <script type="text/javascript">
 var dati = <?php echo json_encode($dati); ?>;
  var loading = jQuery.loading();
 </script>   
 <div class="row">
   <div class="col md-4"></div>
   <div class="col md-4">
   <div class="page-header">
  <h1>Impostazioni cocco slider</h1>
</div>
</div>
   <div class="col md-4"></div>
 </div>
 </br>
<div ng-app="sortableApp" ng-controller="sortableController" class="row">
  
 <div class="col-md-6">
 <button class="btn btn-success" ng-click="add()">Aggiungi slide</button>
    <ul ui-sortable="sortableOptions" ng-model="list">
      <li ng-repeat="item in list">

             




  <div class="panel panel-default">
    <div class="panel-heading" role="tab" id="heading{{$index}}">
      <h4 class="panel-title"> 
      <div class="form-group">
      <div class="row">
        <div class="col-md-4"><img class="img-responsive" src="{{item.linkimg}}"></div>
        <div class="col-md-8">
   <div class="well well-sm">Segnaposto: {{dati[$index].titolomenu}}</div>
   <a role="button" data-toggle="collapse" data-parent="#accordion" href="#collapse{{$index}}" aria-expanded="true" aria-controls="collapseOne">
         <h4>Clicca per modificare le info</h4>
         </a>
        
        <div class="col-md-2"></div>
         <div class="col-md-8"> <button class="btn btn-danger" ng-click="delete(item.ordina)">Elimina slide</button></div>
         <div class="col-md-2"></div>         
        </div>
        
        </div>
        </div>
      </h4>
   </div>   
  </div>




    <div id="collapse{{$index}}" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingOne">
      <div class="panel-body">
        <div class="row">
          <div class="col-md-2"></div>
          <div class="col-md-8">
           <div class="form-group">
    <label for="exampleInputEmail1">Segnaposto</label>
    <input type="text" class="form-control" id="exampleInputEmail1" placeholder="Segnaposto" ng-model="dati[$index].titolomenu">
  </div>
          
   <div class="form-group">
    <label for="exampleInputEmail1">link immagine</label>
    <input type="text" class="form-control" id="exampleInputEmail1" placeholder="Immagine" ng-model="dati[$index].linkimg">
    <button class="btn btn-warning" ng-click="linkImg($index)">Aggiungi immagine da wordpress</button>
  </div>
                <h2>Info Immagine</h2>
                <div class="form-group">
  <label for="exampleInputEmail1">Titolo</label>
    <input type="text" class="form-control" id="exampleInputEmail1" placeholder="titolo" ng-model="dati[$index].titolo">
  </div>
  <div class="form-group">
  <label for="exampleInputEmail1">descrizione</label>
     <textarea class="form-control" rows="5" id="comment" ng-model="dati[$index].descrizione"></textarea>
  </div>
  <div class="form-group">
  <label for="exampleInputEmail1">titolo bottone</label>
    <input type="textarea" class="form-control" id="exampleInputEmail1" placeholder="titolo bottone" ng-model="dati[$index].titolobottone">
  </div>
  <div class="form-group">
  <label for="exampleInputEmail1">link bottone</label>
    <input type="textarea" class="form-control" id="exampleInputEmail1" placeholder="link bottone" ng-model="dati[$index].link">
  </div>
          </div>
          <div class="col-md-2"></div>
        </div>
      </div>
      </div>
   
  




          
          </li>
          </ul>
</div>
    <div class="col-md-3">
      <button class="btn btn-primary" ng-click="salva()">Salva i dati</button>
    </div>
    <div class="col-md-3"></div>
    
</div>

   
 

  <script src="<?php echo plugins_url('/../lib/js/jquery-ui.min.js', __FILE__); ?>"></script>
  <script src="<?php echo plugins_url('/../lib/js/angular.min.js', __FILE__); ?>"></script>
  <script src="<?php echo plugins_url('/../lib/js/sortable.js', __FILE__); ?>"></script>
  <script type="text/javascript" src="<?php echo plugins_url('script.js', __FILE__); ?>"></script>
  
  <link rel="stylesheet" type="text/css" href="<?php echo plugins_url('style.css', __FILE__); ?>">
</div>