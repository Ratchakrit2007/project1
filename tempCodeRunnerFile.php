<?php
SELECT cars.car_id, cars.car_brand, cars.license_plate, COUNT(tickets.ticket_id) AS count 
        FROM  cars LEFT JOIN tickets ON cars.car_id = tickets.car_id
        GROUP BY cars.car_id, cars.car_brand