<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
  /**
   * Run the migrations.
   */
  public function up(): void
  {
    Schema::create('chopper', function (Blueprint $table) {
      $table->id();
      $table->string('PlantGroup')->nullable();
      $table->string('TanggalPengamatan')->nullable();
      $table->string('Lokasi')->nullable();
      $table->string('LuasAktif')->nullable();
      $table->string('Sat')->nullable();
      $table->string('ExsTanaman')->nullable();
      $table->string('% Tanaman Hancur')->nullable();
      $table->string('% Bonggol Tercacah')->nullable();
      $table->string('% Aplikasi Rapat')->nullable();
      $table->string('Total (%)')->nullable();
      $table->timestamps();
    });

    DB::statement("
      INSERT INTO `chopper` (`PlantGroup`, `TanggalPengamatan`, `Lokasi`, `LuasAktif`, `Sat`, `ExsTanaman`, `% Tanaman Hancur`, `% Bonggol Tercacah`, `% Aplikasi Rapat`, `Total (%)`) VALUES
      ('PG1', '02-Jan-24', '084F', '11,02', 'HA', 'Nanas', '96,25', '91,67', '81,67', '91,5'),
      ('PG1', '02-Jan-24', '096J', '12,38', 'HA', 'Nanas', '96,94', '94,17', '86,67', '93,78'),
      ('PG3', '02-Jan-24', '516B', '14,47', 'HA', 'Nanas', '97,17', '83,17', '64,5', '85,03'),
      ('PG3', '03-Jan-24', '517A', '9,01', 'HA', 'Nanas', '99,38', '90,63', '63,13', '88,63'),
      ('PG3', '03-Jan-24', '509E', '7,86', 'HA', 'Nanas', '99,85', '91,97', '80', '92,73'),
      ('PG2', '03-Jan-24', '303M', '8,97', 'HA', 'Nanas', '100', '91,43', '84', '93,37'),
      ('PG2', '04-Jan-24', '303O', '5,3', 'HA', 'Nanas', '100', '89,33', '85,33', '92,8'),
      ('PG2', '04-Jan-24', '303N', '3,45', 'HA', 'Nanas', '100', '85,22', '79,13', '89,91'),
      ('PG3', '05-Jan-24', '524A2', '6,54', 'HA', 'Nanas', '98,82', '92,55', '67,84', '90,12'),
      ('PG3', '10-Jan-24', '549C1', '3,84', 'HA', 'Nanas', '100', '92,67', '50', '87,07'),
      ('PG3', '11-Jan-24', '549C2', '6,38', 'HA', 'Nanas', '100', '91,74', '57,39', '88,17'),
      ('PG3', '12-Jan-24', '549C3', '7,13', 'HA', 'Nanas', '99,26', '92,22', '70,74', '90,74'),
      ('PG3', '13-Jan-24', '561C', '13,55', 'HA', 'Nanas', '99,61', '87,06', '69,61', '88,59'),
      ('PG1', '13-Jan-24', '075B', '10,64', 'HA', 'Nanas', '100', '86,67', '76,67', '90'),
      ('PG1', '13-Jan-24', '075C', '9,9', 'HA', 'Nanas', '100', '83,33', '74,17', '88,17'),
      ('PG1', '15-Jan-24', '101B', '8,22', 'HA', 'Nanas', '100', '90,42', '82,08', '92,58'),
      ('PG2', '16-Jan-24', '118C1', '5,51', 'HA', 'Nanas', '100', '89,5', '81', '92'),
      ('PG2', '17-Jan-24', '123K', '7,25', 'HA', 'Nanas', '98,57', '87,38', '80', '90,38'),
      ('PG2', '19-Jan-24', '161B', '10,49', 'HA', 'Nanas', '100', '89,76', '85,95', '93,1'),
      ('PG1', '20-Jan-24', '074D', '6,15', 'HA', 'Nanas', '98,33', '86,67', '72,33', '88,47'),
      ('PG1', '23-Jan-24', '050A', '12,16', 'HA', 'Nanas', '98,82', '93,33', '71,96', '91,25'),
      ('PG3', '24-Jan-24', '502D1', '11,01', 'HA', 'Nanas', '99,52', '88,33', '72,38', '89,62'),
      ('PG2', '24-Jan-24', '173A', '8,69', 'HA', 'Nanas', '92,86', '79,82', '75,36', '84,14'),
      ('PG3', '24-Jan-24', '502D2', '7,31', 'HA', 'Nanas', '98', '89,67', '67', '88,47'),
      ('PG3', '25-Jan-24', '507C1', '5,05', 'HA', 'Nanas', '97,33', '90', '59,33', '86,8'),
      ('PG3', '25-Jan-24', '507C2', '9,16', 'HA', 'Nanas', '97,22', '91,11', '58,33', '87'),
      ('PG2', '25-Jan-24', '109D1', '11,2', 'HA', 'Nanas', '100', '89,41', '85,29', '92,82'),
      ('PG1', '27-Jan-24', '067E', '8,39', 'HA', 'Nanas', '97,33', '91,33', '68,67', '89,2'),
      ('PG3', '29-Jan-24', '561E', '10,08', 'HA', 'Nanas', '98,57', '92,62', '66,43', '89,76'),
      ('PG2', '29-Jan-24', '106H', '8,29', 'HA', 'Nanas', '100', '92,17', '85,65', '94'),
      ('PG2', '29-Jan-24', '123H', '11,32', 'HA', 'Nanas', '99,06', '90,47', '81,88', '92,19'),
      ('PG2', '30-Jan-24', '110E', '8,42', 'HA', 'Nanas', '99,53', '93,26', '86,16', '94,35'),
      ('PG1', '01-Feb-24', '067D', '6,21', 'HA', 'Nanas', '98,33', '86,67', '73,33', '88,67'),
      ('PG2', '01-Feb-24', '130B', '6,24', 'HA', 'Nanas', '88,33', '81,33', '64,33', '80,73'),
      ('PG2', '01-Feb-24', '130J', '8,24', 'HA', 'Nanas', '96,13', '84,84', '65,48', '85,48'),
      ('PG1', '02-Feb-24', '067G', '2,14', 'HA', 'Nanas', '96', '87,33', '69,33', '87,2'),
      ('PG1', '03-Feb-24', '063B', '11,4', 'HA', 'Nanas', '100', '86,94', '75', '89,78'),
      ('PG1', '03-Feb-24', '067C', '6,09', 'HA', 'Nanas', '93,5', '81,5', '52', '80,4'),
      ('PG2', '05-Feb-24', '125D', '10,28', 'HA', 'Nanas', '95', '85,71', '69,05', '86,1'),
      ('PG2', '05-Feb-24', '125G', '3,32', 'HA', 'Nanas', '95,29', '77,65', '65,88', '82,35'),
      ('PG1', '07-Feb-24', '038C', '11,66', 'HA', 'Nanas', '99,05', '91,19', '79,05', '91,9'),
      ('PG2', '09-Feb-24', '120E', '7,95', 'HA', 'Nanas', '100', '89,63', '80,37', '91,93'),
      ('PG2', '12-Feb-24', '106I', '4,3', 'HA', 'Nanas', '100', '91', '83,67', '93,13'),
      ('PG3', '13-Feb-24', '518A', '15,29', 'HA', 'Nanas', '97,24', '89,83', '65,17', '87,86'),
      ('PG1', '13-Feb-24', '082A', '14,13', 'HA', 'Nanas', '99,33', '91,33', '81,67', '92,6'),
      ('PG2', '15-Feb-24', '138G', '6,6', 'HA', 'Nanas', '96,92', '86,67', '78,46', '89,13'),
      ('PG1', '16-Feb-24', '068B', '1,42', 'HA', 'Nanas', '97,5', '93,75', '75', '91,5'),
      ('PG1', '16-Feb-24', '068C', '7,46', 'HA', 'Nanas', '97,65', '77,65', '57,06', '81,53'),
      ('PG3', '17-Feb-24', '537C', '8,44', 'HA', 'Nanas', '99,17', '96,94', '51,94', '88,83'),
      ('PG3', '17-Feb-24', '514H1', '7,71', 'HA', 'Nanas', '99', '87,67', '67,67', '88,2'),
      ('PG3', '17-Feb-24', '514H2', '8,81', 'HA', 'Nanas', '99', '91', '66,33', '89,27'),
      ('PG3', '19-Feb-24', '580B', '8,03', 'HA', 'Nanas', '99,52', '87,62', '72,86', '89,43'),
      ('PG2', '19-Feb-24', '163J', '10,05', 'HA', 'Nanas', '93,21', '85,47', '76,42', '86,75'),
      ('PG1', '19-Feb-24', '073F', '6,02', 'HA', 'Nanas', '99,33', '76', '60', '82,13'),
      ('PG1', '20-Feb-24', '063A', '9,97', 'HA', 'Nanas', '92,61', '85,65', '25,22', '76,35'),
      ('PG3', '22-Feb-24', '518D', '12,48', 'HA', 'Nanas', '98,67', '96,17', '54,83', '88,9'),
      ('PG1', '23-Feb-24', '061C', '11,03', 'HA', 'Nanas', '100', '86,67', '72,5', '89,17'),
      ('PG3', '23-Feb-24', '549A2', '10,53', 'HA', 'Nanas', '99,17', '85,42', '71,88', '88,21'),
      ('PG2', '23-Feb-24', '167B', '9,75', 'HA', 'Nanas', '95,53', '88,94', '82,77', '90,34'),
      ('PG3', '24-Feb-24', '568B4', '8,98', 'HA', 'Nanas', '99,71', '87,94', '64,71', '88'),
      ('PG3', '24-Feb-24', '568B3', '9,76', 'HA', 'Nanas', '99,91', '88,53', '58,9', '87,16'),
      ('PG3', '24-Feb-24', '568C1', '5,91', 'HA', 'Nanas', '99,13', '97,39', '50,43', '88,7'),
      ('PG1', '26-Feb-24', '050C1', '6,83', 'HA', 'Nanas', '100', '94,07', '69,63', '91,56'),
      ('PG3', '27-Feb-24', '583C', '11,41', 'HA', 'Nanas', '99,52', '86,9', '70', '88,57'),
      ('PG1', '27-Feb-24', '073E', '8,28', 'HA', 'Nanas', '96,67', '60', '28,89', '68,44'),
      ('PG1', '27-Feb-24', '073C', '6,56', 'HA', 'Nanas', '99,09', '81,82', '54,55', '83,27'),
      ('PG2', '27-Feb-24', '118C', '8,12', 'HA', 'Nanas', '100', '90', '82,67', '92,53'),
      ('PG3', '28-Feb-24', '556B2', '7,06', 'HA', 'Nanas', '98,33', '89,58', '56,25', '86,42'),
      ('PG1', '28-Feb-24', '004I', '5,05', 'HA', 'Nanas', '95,42', '92,08', '63,75', '87,75'),
      ('PG2', '28-Feb-24', '107C', '6,71', 'HA', 'Nanas', '100', '92,16', '86,49', '94,16'),
      ('PG3', '29-Feb-24', '584B1', '7,76', 'HA', 'Nanas', '100', '92,22', '46,44', '86,18'),
      ('PG2', '29-Feb-24', '111C', '14,01', 'HA', 'Nanas', '100', '90', '82,94', '92,59'),
      ('PG2', '29-Feb-24', '121A', '12,62', 'HA', 'Nanas', '97,78', '93,89', '87,78', '94,22'),
      ('PG2', '01-Mar-24', '169B', '11,82', 'HA', 'Nanas', '92,67', '86,44', '82,67', '88,18'),
      ('PG2', '01-Mar-24', '165B', '10,25', 'HA', 'Nanas', '92,37', '88,95', '80,26', '88,58'),
      ('PG2', '02-Mar-24', '152C', '11,9', 'HA', 'Nanas', '100', '82,45', '73,67', '87,71'),
      ('PG2', '02-Mar-24', '303F', '7,06', 'HA', 'Nanas', '100', '91,88', '87,19', '94,19'),
      ('PG2', '05-Mar-24', '134B', '11,52', 'HA', 'Nanas', '98,71', '84,03', '66,29', '86,35'),
      ('PG1', '05-Mar-24', '070G', '4,39', 'HA', 'Nanas', '100', '98,57', '88,57', '97,14'),
      ('PG3', '06-Mar-24', '533B', '12,24', 'HA', 'Nanas', '99,44', '89,07', '72,78', '89,96'),
      ('PG1', '06-Mar-24', '055C', '8,07', 'HA', 'Nanas', '96,67', '87,78', '41,11', '82'),
      ('PG1', '06-Mar-24', '055C2', '4,97', 'HA', 'Nanas', '100', '81,11', '34,44', '79,33'),
      ('PG1', '06-Mar-24', '055C1', '5,57', 'HA', 'Nanas', '98,33', '95', '76,67', '92,67'),
      ('PG1', '08-Mar-24', '085H1', '8,18', 'HA', 'Nanas', '98,33', '95,71', '90,48', '95,71'),
      ('PG1', '09-Mar-24', '090C', '7,88', 'HA', 'Nanas', '97,91', '95,12', '91,4', '95,49'),
      ('PG3', '12-Mar-24', '5,19E+05', '15,77', 'HA', 'Nanas', '99,5', '88,33', '63', '87,73'),
      ('PG1', '12-Mar-24', '073L', '11,91', 'HA', 'Nanas', '92,78', '79,44', '65,56', '82'),
      ('PG2', '13-Mar-24', '178B', '7,88', 'HA', 'Nanas', '100', '85,78', '80,67', '90,44'),
      ('PG2', '13-Mar-24', '178E', '8,41', 'HA', 'Nanas', '100', '86,34', '78,29', '90,2'),
      ('PG2', '13-Mar-24', '143C', '13,92', 'HA', 'Nanas', '98,83', '84,17', '75,67', '88,33'),
      ('PG3', '14-Mar-24', '506A4', '6,99', 'HA', 'Nanas', '97,58', '85,76', '64,85', '86,3'),
      ('PG2', '14-Mar-24', '152E', '7,23', 'HA', 'Nanas', '100', '79,71', '68,82', '85,65'),
      ('PG1', '14-Mar-24', '083F', '9,16', 'HA', 'Nanas', '100', '96,67', '78,89', '94,44'),
      ('PG3', '16-Mar-24', '512A', '12,55', 'HA', 'Nanas', '99,47', '86,49', '67,02', '87,79'),
      ('PG1', '18-Mar-24', '072H1', '10,52', 'HA', 'Nanas', '92,5', '80,5', '70', '83,2'),
      ('PG1', '18-Mar-24', '3,40E+02', '5,23', 'HA', 'Nanas', '96', '94,67', '77,33', '91,73'),
      ('PG3', '19-Mar-24', '526A2', '9,56', 'HA', 'Nanas', '99,67', '89,67', '67,67', '89,27'),
      ('PG3', '20-Mar-24', '526B3', '3,61', 'HA', 'Nanas', '99,63', '87,04', '69,63', '88,59'),
      ('PG3', '20-Mar-24', '552E', '8,8', 'HA', 'Nanas', '99,41', '88,82', '59,71', '87,24'),
      ('PG2', '20-Mar-24', '155B', '9,88', 'HA', 'Nanas', '100', '78,48', '73,7', '86,13'),
      ('PG2', '20-Mar-24', '155C', '9,19', 'HA', 'Nanas', '100', '83,75', '75', '88,5'),
      ('PG2', '21-Mar-24', '182G', '10,83', 'HA', 'Nanas', '100', '86,41', '80,51', '90,67'),
      ('PG2', '22-Mar-24', '162C', '8,78', 'HA', 'Nanas', '97,4', '90,6', '84,8', '92,16'),
      ('PG2', '22-Mar-24', '182C', '8,83', 'HA', 'Nanas', '100', '85,67', '82', '90,67'),
      ('PG1', '22-Mar-24', '024I', '11,33', 'HA', 'Nanas', '99,63', '92,59', '71,48', '91,19'),
      ('PG3', '25-Mar-24', '522A', '11,86', 'HA', 'Nanas', '99,47', '85,61', '68,6', '87,75'),
      ('PG1', '25-Mar-24', '016B', '11,2', 'HA', 'Nanas', '100', '77,58', '72,73', '85,58'),
      ('PG2', '25-Mar-24', '111D1', '6,81', 'HA', 'Nanas', '100', '92,75', '87,25', '94,55'),
      ('PG2', '27-Mar-24', '165C1', '5,74', 'HA', 'Nanas', '96,67', '87,14', '80,48', '89,62'),
      ('PG1', '28-Mar-24', '099B1', '5,4', 'HA', 'Nanas', '97,41', '95,93', '81,11', '93,56'),
      ('PG1', '28-Mar-24', '018F', '11,63', 'HA', 'Nanas', '99,41', '91,37', '72,35', '90,78'),
      ('PG2', '28-Mar-24', '111G', '3,39', 'HA', 'Nanas', '100', '89,05', '80,95', '91,81'),
      ('PG3', '30-Mar-24', '520D1', '4,3', 'HA', 'Nanas', '100', '90,5', '61', '88,4');
    ");
  }

  /**
   * Reverse the migrations.
   */
  public function down(): void
  {
    Schema::dropIfExists('chopper');
  }
};
