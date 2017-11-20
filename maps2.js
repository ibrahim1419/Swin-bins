
var customLabel = {
    A: {
    label: ''
    },
    B: {
    label: ''
    }
  };
  var map;
   var maks=[];
   var markersArray = [];
   var driversArray = [];
  function initialize() {
    myLatlng = new google.maps.LatLng(1.544765,110.365219);
    mapOptions = {
        zoom: 12,
        center: myLatlng,
        mapTypeId: google.maps.MapTypeId.ROADMAP,
    }
    infoWindow = new google.maps.InfoWindow;
    map = new google.maps.Map(document.getElementById('map_canvas'), mapOptions);
     
    xmlUrl = "markers.php";
     
    load(); 
    }

    function load() {
             

      var infoWindow = new google.maps.InfoWindow;
      // Change this depending on the name of your PHP or XML file
      downloadUrl('markers.php', function(data) {
      
        var xml = data.responseXML;
        var markers = xml.documentElement.getElementsByTagName('marker');
        
        Array.prototype.forEach.call(markers, function(markerElem) {
        
          var id = markerElem.getAttribute('id');
          var name = markerElem.getAttribute('name');
          var address = markerElem.getAttribute('area');
          var type = markerElem.getAttribute('type');
          var fill = markerElem.getAttribute('fill');
          var fillMax = markerElem.getAttribute('fillHeight');
                    var fillLevel = Math.trunc(((fillMax-fill)/fillMax) * 100);
          var lastUpdated = markerElem.getAttribute('lastUpdate');
          var zone = markerElem.getAttribute('zone');
          var tags = markerElem.getAttribute('tags');
          var Priority = markerElem.getAttribute('Priority');  
          var battery = markerElem.getAttribute('tilt');
          var time = markerElem.getAttribute('timeLastUpdate');
          var point = new google.maps.LatLng(
          parseFloat(markerElem.getAttribute('lat')),
          parseFloat(markerElem.getAttribute('lng')));
          
          var infowincontent = document.createElement('div');
          var strong = document.createElement('strong');
          strong.textContent = name
          infowincontent.appendChild(strong);
          infowincontent.appendChild(document.createElement('br'));

          var textName = document.createElement('text');
          textName.textContent = ""+name;
          infowincontent.appendChild(textName);
          infowincontent.appendChild(document.createElement('br'));

          var textID = document.createElement('text');
          textID.textContent = "Bin ID: "+id;
          infowincontent.appendChild(textID);
          infowincontent.appendChild(document.createElement('br'));

          var textType = document.createElement('text');
          textType.textContent = "Bin type:</b> "+type;
          infowincontent.appendChild(textType);
          infowincontent.appendChild(document.createElement('br'));

          var textFill = document.createElement('text');
          textFill.textContent = ""+fillLevel+"%";
          infowincontent.appendChild(textFill);
          infowincontent.appendChild(document.createElement('br'));

          var textbattery = document.createElement('text');
          textbattery.textContent = ""+battery+" V";
          infowincontent.appendChild(textbattery);
          infowincontent.appendChild(document.createElement('br'));

          var textLastUpdated = document.createElement('text');
          textLastUpdated.textContent = ""+lastUpdated+","+time+"";
          infowincontent.appendChild(textLastUpdated);
          infowincontent.appendChild(document.createElement('br'));

          var textLink = document.createElement('a');
            textLink.setAttribute('href', '#');
            textLink.onclick = function (e) { openModal(id); } 
            textLink.textContent = "View graph";
            infowincontent.appendChild(textLink);
            infowincontent.appendChild(document.createElement('br'));  

          //change icon based on fill level
          var image ='bin_green.png';
          if(fillLevel < 30){
            image = 'bin_green.png';
          }else if (fillLevel < 70){
            image = 'bin_yellow.png';
          }else{
            image = 'bin_red.png';
          }

          var icon = customLabel[type] || {};
          var marker = new google.maps.Marker({
            map: map,
            icon: image,
            position: point,
            label: icon.label,
            category: zone,
            tags: tags,
            Priority: Priority
          });

           marker.addListener('click', function() {
            // infoWindow.setContent(infowincontent);
            // infoWindow.open(map, marker);
            openModal(id,address, zone,fillLevel,battery,lastUpdated);
          });
          markersArray.push(marker);


         
           maks.push(marker);
           filterMarkers = function (category) {
    for (i = 0; i < markersArray.length; i++) {
        marker = markersArray[i];
        // If is same category or category not picked
        if (marker.category == category || category.length === 0) {
            marker.setVisible(true);
        }
        // Categories don't match 
        else {
            marker.setVisible(false);
        }
    }
}
    filterMarkers1 = function (tags) {
    for (i = 0; i < markersArray.length; i++) {
        marker = markersArray[i];
        // If is same category or category not picked
        if (marker.tags == tags || tags.length === 0) {
            marker.setVisible(true);
        }
        // Categories don't match 
        else {
            marker.setVisible(false);
        }
    }
  }
  filterMarkers2 = function (Priority) {
    for (i = 0; i < markersArray.length; i++) {
        marker = markersArray[i];
        // If is same category or category not picked
        if (marker.Priority == Priority || Priority.length === 0) {
            marker.setVisible(true);
        }
        // Categories don't match 
        else {
            marker.setVisible(false);
        }
    }
  }

		   map.set('styles',

            [
                {
                    "featureType": "administrative",
                    "elementType": "labels.text.fill",
                    "stylers": [
                        {
                            "color": "#444444"
                        }
                    ]
                },
                {
                    "featureType": "landscape",
                    "elementType": "all",
                    "stylers": [
                        {
                            "color": "#f2f2f2"
                        }
                    ]
                },
                {
                    "featureType": "poi",
                    "elementType": "all",
                    "stylers": [
                        {
                            "visibility": "off"
                        }
                    ]
                },
                {
                    "featureType": "road",
                    "elementType": "all",
                    "stylers": [
                        {
                            "saturation": -100
                        },
                        {
                            "lightness": 45
                        }
                    ]
                },
                {
                    "featureType": "road.highway",
                    "elementType": "all",
                    "stylers": [
                        {
                            "visibility": "simplified"
                        }
                    ]
                },
                {
                    "featureType": "road.arterial",
                    "elementType": "labels.icon",
                    "stylers": [
                        {
                            "visibility": "off"
                        }
                    ]
                },
                {
                    "featureType": "transit",
                    "elementType": "all",
                    "stylers": [
                        {
                            "visibility": "off"
                        }
                    ]
                },
                {
                    "featureType": "water",
                    "elementType": "all",
                    "stylers": [
                        {
                            "color": "#73b21a"
                        },
                        {
                            "visibility": "on"
                        }
                    ]
                }
            ]
			);
            
          
                     
        });

            
      });

      

 downloadUrl('drivers.php', function(data) {
      
        var xml = data.responseXML;
        var markers = xml.documentElement.getElementsByTagName('driver')
        
        Array.prototype.forEach.call(markers, function(markerElem) {
        
          var id = markerElem.getAttribute('id');
          var name = markerElem.getAttribute('name');
          var address = markerElem.getAttribute('address');
          var type = markerElem.getAttribute('type');
          var fill = markerElem.getAttribute('fill');
          var fillMax = markerElem.getAttribute('fillHeight');
                    var fillLevel = Math.trunc(((fillMax-fill)/fillMax) * 100);
          var lastUpdated = markerElem.getAttribute('lastUpdate');
          var time = markerElem.getAttribute('timeLastUpdate');
          var point = new google.maps.LatLng(
          parseFloat(markerElem.getAttribute('lat')),
          parseFloat(markerElem.getAttribute('lng')));
          
          var infowincontent = document.createElement('div');
          var strong = document.createElement('strong');
          strong.textContent = name
          infowincontent.appendChild(strong);
          infowincontent.appendChild(document.createElement('br'));

          var textID = document.createElement('text');
          textID.textContent = "Name: "+name;
          infowincontent.appendChild(textID);
          infowincontent.appendChild(document.createElement('br'));

          var textType = document.createElement('text');
          textType.textContent = "Bin type: "+type;
          infowincontent.appendChild(textType);
          infowincontent.appendChild(document.createElement('br'));

          var textFill = document.createElement('text');
          textFill.textContent = "Bin fill: "+fillLevel+"%";
          infowincontent.appendChild(textFill);
          infowincontent.appendChild(document.createElement('br'));

          var textLastUpdated = document.createElement('text');
          textLastUpdated.textContent = "(Last updated: "+lastUpdated+","+time+")";
          infowincontent.appendChild(textLastUpdated);
          infowincontent.appendChild(document.createElement('br'));

          //change icon based on fill level
          var image ='truck3.png';
          

          var icon = customLabel[type] || {};
          var marker = new google.maps.Marker({
            map: map,
            icon: image,
            position: point,
            label: icon.label
          });
            
          

          marker.addListener('click', function() {
            infoWindow.setContent(infowincontent);
            infoWindow.open(map, marker);
          });

        });
      });
}
function openModal(id,address, zone, fillLevel,battery, lastUp){
  var link = "graphs.php?id="+id+"&zone="+zone+"&fillLevel="+fillLevel+"&battery="+battery+"&lastUp="+lastUp;

 
  $('#myModal').load(link,function(response, status, xhr){
      if ( status == "error" ) {
        var msg = "Sorry but there was an error: ";
        $("#error" ).html( msg + xhr.status + " " + xhr.statusText );
        alert(msg);
      }else{
      }
    });       
  $("#myModal").modal("show");

}
function resetMarkers(){
    for (var i=0;i<markersArray.length; i++){
        markersArray[i].setMap(null);
    }
    //reset the main marker array for the next call
    markersArray=[];
}

function hidebins(){
  for (var i=0;i<markersArray.length; i++){
        markersArray[i].setMap(null);
    }
    //reset the main marker array for the next call
    markersArray=[];

}

function hidedrivers(){
  for (var i=0;i<driversArray.length; i++){
        driversArray[i].setMap(null);
    }
    //reset the main marker array for the next call
    driversArray=[];

}
function showbins(){

$('.removeable').each(function(){
  $(this).prop('checked',false);

})



resetMarkers();
  load();
}

function battery(){
  for (i = 0; i < markersArray.length; i++) {
        marker = markersArray[i];
        // If is same category or category not picked
        if (marker.battery < 2.5 ) {
            marker.setVisible(true);
        }
        // Categories don't match 
        else {
            marker.setVisible(false);
        }
    }
}

    

    setInterval(function() {
      resetMarkers();
      load();

       },30000);

    function downloadUrl(url,callback) {
    var request = window.ActiveXObject ?
         new ActiveXObject('Microsoft.XMLHTTP') :
         new XMLHttpRequest;
     
    request.onreadystatechange = function() {
        if (request.readyState == 4) {
            //request.onreadystatechange = doNothing;
            callback(request, request.status);
        }
    };
     
    request.open('GET', url, true);
    request.send(null);
}

  function doNothing() {}

