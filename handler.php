<?php
/**
 * Created by PhpStorm.
 * User: kodix
 * Date: 08.11.18
 * Time: 9:03
 */

//var_dump($_POST);die;
mail('family_89@mail.ru', 'Заявка простософт', print_r($_POST, true));

echo json_encode(['status' => 'thanks']);
