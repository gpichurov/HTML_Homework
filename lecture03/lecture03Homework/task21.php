<?php

// ������ 21:
// ������ � �������� ����� �����.
// ��������� �� ������ �� ����� �: 2,3,4,5,6,7,8,9,10, ����, ����,
// ���, ���.
// ��������� �� ���� �� ������� �: ������, ����, ����, ����.
// �� �� ������� ��������, ���� ����� �� ������� N - ����� ��
// ��������� [1..51] � �� �������� ��������� ����� ����� �
// ���������� ��-������ ����� �� �������.
// ������: 47.
// �����: ��� ����, ��� ����, ��� ������, ��� ����, ��� ����, ��� ����

require_once 'readline.php';

do{
	$n = readline('�������� ����� N[1..51]: ', PHP_EOL);
} while ($n < 1 || $n > 51);


for ($n; $n <= 52; $n++){
	
	$boq = $n % 4;
	$karta = ceil($n / 4);
	
		switch ($karta) {
			case 1: echo '2 ';
			break;
			case 2: echo '3 ';
			break;
			case 3: echo '4 ';
			break;
			case 4: echo '5 ';
			break;
			case 5: echo '6 ';
			break;
			case 6: echo '7 ';
			break;
			case 7: echo '8 ';
			break;
			case 8: echo '9 ';
			break;
			case 9: echo '10 ';
			break;
			case 10: echo '���� ';
			break;
			case 11: echo '���� ';
			break;
			case 12: echo '��� ';
			break;
			case 13: echo '��� ';
			break;
		}
		
		switch ($boq) {
			case 1: echo '������';
			break;
			case 2: echo '����';
			break;
			case 3: echo '����';
			break;
			case 0: echo '����';
			break;
		}	
		
		if ($n < 52) {
			echo ', ';
		}
}



