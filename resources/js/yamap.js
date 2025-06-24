ymaps.ready(init);
    
    function init() {
        var map = new ymaps.Map("map", {
            center: [55.755826, 37.617300], // Центр по Москве
            zoom: 5
        });
        
        // Офисы на карте
        var offices = [
            {
                coords: [55.755826, 37.617300],
                title: "Московский офис",
                address: "Москва, ул. Тверская, д. 7",
                phone: "+7 (495) 123-45-67"
            },
            {
                coords: [59.934280, 30.335098],
                title: "Санкт-Петербургский офис",
                address: "Санкт-Петербург, Невский пр-т, д. 28",
                phone: "+7 (812) 456-78-90"
            },
            {
                coords: [56.838011, 60.597465],
                title: "Екатеринбургский офис",
                address: "Екатеринбург, ул. Ленина, д. 52",
                phone: "+7 (343) 111-22-33"
            }
        ];
        
        // Добавляем метки
        offices.forEach(function(office) {
            var placemark = new ymaps.Placemark(
                office.coords,
                {
                    hintContent: office.title,
                    balloonContent: `
                        <b>${office.title}</b><br>
                        ${office.address}<br>
                        Телефон: ${office.phone}
                    `
                },
                {
                    preset: 'islands#blueDotIcon'
                }
            );
            map.geoObjects.add(placemark);
        });
        
        // Автоматически подбираем масштаб
        map.setBounds(map.geoObjects.getBounds(), {
            checkZoomRange: true
        });
        
        // Убираем лишние элементы управления
        map.controls.remove('geolocationControl');
        map.controls.remove('searchControl');
        map.controls.remove('trafficControl');
    }