<?php

$text = '������� ������ �� ���������� 1234 � 1400 ������� ��������� � �������������� ����� X 0987 AX';
preg_match('#([a-z]{1,2})\s(\d{4})\s([a-z]{2})#i', $text, $matches);

var_dump($matches);

$id = 'element-id-12';