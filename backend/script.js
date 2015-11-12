var myapp = angular.module('sortableApp', ['ui.sortable']);


myapp.controller('sortableController', function ($scope) {
  $scope.dati = dati; 
  
  $scope.list = $scope.dati;

  $scope.linkImg = function uploadJsWordpress(id) {
 
 
        //If the uploader object has already been created, reopen the dialog
        if (custom_uploader) {
            custom_uploader.open();
            return;
        }
 
        //Extend the wp.media object
        var custom_uploader = wp.media.frames.file_frame = wp.media({
            title: "Scegli l'immagine",
            button: {
                text: 'Seleziona'
            },
            multiple: false
        });
 
        //When a file is selected, grab the URL and set it as the text field's value
        custom_uploader.on('select', function() {
            attachment = custom_uploader.state().get('selection').first().toJSON();
            $scope.$apply(function(){
            $scope.dati[id].linkimg = attachment.url;
            })
        });
 
        //Open the uploader dialog
        custom_uploader.open();
 
    };
  
  $scope.add = function(){
    var arg = {
      "titolomenu" : "vuoto", 
      "titolo" : "vuoto", 
      "linkimg" : "vuoto", 
      "ordina" : 0, 
      "titolobottone" : "vuoto", 
      "link" : "vuoto", 
      "descrizione" : "vuoto"
    }
    $scope.dati.push(arg);
    ordina();
    console.log($scope.dati)
  }
$scope.salva = function(){
  loading.open();
  jQuery.ajax({
        url: ajaxurl,
        data: {
            'action':'persisti_coccoslider',
            'dati' : $scope.dati
        },
        success:function(data) {
          loading.close();
          alert(data);
        },
        error: function(errorThrown){
          loading.close();
            alert("Errore del server");
        }
    });  
              

}
  $scope.delete = function(id){
    $scope.dati.map(function(e,index) {
            if(parseInt(e.ordina)==parseInt(id)){
              $scope.dati.splice(index,1);
            }
    })
    ordina();
  }
  
  function ordina(){
    var ciclo = $scope.dati;
       ciclo.map(function(i,index){
        $scope.dati[index].ordina = index;
    })
  }
 
  $scope.sortableOptions = {
    stop: function(e, ui) {
         ordina();
    }
  };
});