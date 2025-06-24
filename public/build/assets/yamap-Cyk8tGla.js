ymaps.ready(n);function n(){var o=new ymaps.Map("map",{center:[55.755826,37.6173],zoom:5}),t=[{coords:[55.755826,37.6173],title:"Московский офис",address:"Москва, ул. Тверская, д. 7",phone:"+7 (495) 123-45-67"},{coords:[59.93428,30.335098],title:"Санкт-Петербургский офис",address:"Санкт-Петербург, Невский пр-т, д. 28",phone:"+7 (812) 456-78-90"},{coords:[56.838011,60.597465],title:"Екатеринбургский офис",address:"Екатеринбург, ул. Ленина, д. 52",phone:"+7 (343) 111-22-33"}];t.forEach(function(e){var r=new ymaps.Placemark(e.coords,{hintContent:e.title,balloonContent:`
                        <b>${e.title}</b><br>
                        ${e.address}<br>
                        Телефон: ${e.phone}
                    `},{preset:"islands#blueDotIcon"});o.geoObjects.add(r)}),o.setBounds(o.geoObjects.getBounds(),{checkZoomRange:!0}),o.controls.remove("geolocationControl"),o.controls.remove("searchControl"),o.controls.remove("trafficControl")}
