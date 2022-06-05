<?php
    require '../orm/db.php';

    if ($_GET['query'] == 'filter') {
        $profile = R::findAll('profile', 'WHERE `rubrika` = "'.$_GET['profile'].'"');
        $profile_arr = array();
        foreach ($profile as $pro) {
            array_push($profile_arr, ['id'=>$pro['id'], 'photo'=>$pro['photo'], 'name'=>$pro['name'], 'text'=>$pro['text']]);
        }
        $text_info = '';
        if ($_GET['profile'] == 'brusbox') {
            $text_info = 'BRUSBOX — это крупный производитель профильных систем из России, компания была основана в 2003 году. Она представила на рынке принципиально новый профиль, разработанный российскими специалистами на базе немецких технологий с учетом климатических особенностей нашей страны.</br></br>BRUSBOX AERO — наиболее востребованная система профилей в сегменте как корпоративного, так и частного строительства за счет оптимального соотношения ее цены и качества.';
        }
        if ($_GET['profile'] == 'salamander') {
            $text_info = 'С системой Streamline был создан новый оконный профиль с идеальным дизайном и техническими характеристиками для современных окон 21 века. Система</br></br>Стримлайн будет оптимальным решением для покупателя, чей взгляд устремлен в будущее и кто ценит настоящее качество и дизайн от компании Salamander.';
        }
        if ($_GET['profile'] == 'provedal') {
            $text_info = 'Профильные системы Provedal позволяют создавать недорогие конструкции для «холодного» остекления балконов и лоджий, террас и веранд, беседок и оранжерей. Используются в качестве внутренних перегородок при зонировании жилых и офисных интерьеров. В линейке производителя есть профили с поворотными и раздвижными створками.</br></br>Благодаря своей универсальности, низкой цене и надежности Provedal пользуется высоким спросом на отечественном рынке алюминиевых конструкций.';
        }
        $arr = ['status'=>'ok', 'text_info'=>$text_info, 'profile'=>$profile_arr];
        $json = json_encode($arr);
        echo $json;
    }

    if ($_GET['query'] == 'services') {
        $services = R::findAll('services');
        $services_arr = array();
        foreach ($services as $service) {
            array_push($services_arr, ['id'=>$service['id'], 'photo'=>$service['photo'], 'title'=>$service['title'], 'price'=>$service['price'], 'type'=>$service['type'], 'description'=>$service['description']]);
        }
        $arr = ['status'=>'ok', 'services'=>$services_arr];
        $json = json_encode($arr);
        echo $json;
    }