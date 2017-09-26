@extends('layouts.menu')

@section('content')
      <!-- **********************************************************************************************************************************************************
      MAIN CONTENT
      *********************************************************************************************************************************************************** -->
      <!--main content start-->

      <section id="main-content">
          <section class="wrapper">
          	<h3><i class="fa fa-angle-right"></i>L'emploi du temps</h3>

          	<!-- BASIC FORM ELELEMNTS -->
          	<div class="row mt">
          		<div class="col-lg-12">
                  <div class="form-panel">
                  	  <h4 class="mb"><i class="fa fa-angle-right"></i>la Classe : C1</h4>


<!-- emploi ************************************************************************************************ -->
<!-- Matin  *********************************************************************-->
                      <h1 style="text-align:center;">Matin</h1>
                      <table class="table table-bordered">
                        <thead>
                          <tr>
                            <th style="width:20%">Jours/Heures</th>
                            <th style="width:40%">
                              <div class="row">
                                <div class="col-md-6">08H00</div>
                                <div class="col-md-6" style="text-align:right">10H00</div>
                              </div>
                            </th>
                            <th style="width:40%">
                              <div class="row">
                                <div class="col-md-6">10H00</div>
                                <div class="col-md-6" style="text-align:right">12H00</div>
                              </div>
                            </th>
                          </tr>
                        </thead>
                        <tbody>
                          <tr>
                            <td style="width:20%">LUNDI</td>
                            <td style="width:40%">
                              <select class="form-control">
                                <option value="" disabled selected>Choise une Matiére</option>
                                <option>Français</option>
                                <option>Arabe</option>
                                <option>Math</option>
                              </select>
                              <div class="row">
                                <div class="col-md-6">
                                  de :
                                  <select class="form-control">
                                    <option></option>
                                    <option>08:00</option>
                                    <option>08:30</option>
                                    <option>09:00</option>
                                    <option>09:30</option>
                                  </select>
                                </div>
                                <div class="col-md-6">
                                  à :
                                  <select class="form-control">
                                    <option></option>
                                    <option>08:30</option>
                                    <option>09:00</option>
                                    <option>09:30</option>
                                    <option>10:00</option>
                                  </select>
                                </div>
                              </div>
                              <select class="form-control">
                                <option value="" disabled selected>Choisir le prof</option>
                                <option>Ayoub</option>
                                <option>Yasser</option>
                                <option>Abdelmourhit</option>
                              </select>
                            </td>
                            <td style="width:40%">
                              <select class="form-control">
                                <option value="" disabled selected>Choise une Matiére</option>
                                <option>Français</option>
                                <option>Arabe</option>
                                <option>Math</option>
                              </select>
                              <div class="row">
                                <div class="col-md-6">
                                  de :
                                  <select class="form-control">
                                    <option></option>
                                    <option>10:00</option>
                                    <option>10:30</option>
                                    <option>11:00</option>
                                    <option>11:30</option>
                                  </select>
                                </div>
                                <div class="col-md-6">
                                  à :
                                  <select class="form-control">
                                    <option></option>
                                    <option>10:30</option>
                                    <option>11:00</option>
                                    <option>11:30</option>
                                    <option>12:00</option>
                                  </select>
                                </div>
                              </div>
                              <select class="form-control">
                                <option value="" disabled selected>Choisir le prof</option>
                                <option>Ayoub</option>
                                <option>Yasser</option>
                                <option>Abdelmourhit</option>
                              </select>
                            </td>
                          </tr>
                          <!--*********************************************************************-->
                          <tr>
                            <td style="width:20%">Mardi</td>
                            <td style="width:40%">
                              <select class="form-control">
                                <option value="" disabled selected>Choise une Matiére</option>
                                <option>Français</option>
                                <option>Arabe</option>
                                <option>Math</option>
                              </select>
                              <div class="row">
                                <div class="col-md-6">
                                  de :
                                  <select class="form-control">
                                    <option></option>
                                    <option>08:00</option>
                                    <option>08:30</option>
                                    <option>09:00</option>
                                    <option>09:30</option>
                                  </select>
                                </div>
                                <div class="col-md-6">
                                  à :
                                  <select class="form-control">
                                    <option></option>
                                    <option>08:30</option>
                                    <option>09:00</option>
                                    <option>09:30</option>
                                    <option>10:00</option>
                                  </select>
                                </div>
                              </div>
                              <select class="form-control">
                                <option value="" disabled selected>Choisir le prof</option>
                                <option>Ayoub</option>
                                <option>Yasser</option>
                                <option>Abdelmourhit</option>
                              </select>
                            </td>
                            <td style="width:40%">
                              <select class="form-control">
                                <option value="" disabled selected>Choise une Matiére</option>
                                <option>Français</option>
                                <option>Arabe</option>
                                <option>Math</option>
                              </select>
                              <div class="row">
                                <div class="col-md-6">
                                  de :
                                  <select class="form-control">
                                    <option></option>
                                    <option>10:00</option>
                                    <option>10:30</option>
                                    <option>11:00</option>
                                    <option>11:30</option>
                                  </select>
                                </div>
                                <div class="col-md-6">
                                  à :
                                  <select class="form-control">
                                    <option></option>
                                    <option>10:30</option>
                                    <option>11:00</option>
                                    <option>11:30</option>
                                    <option>12:00</option>
                                  </select>
                                </div>
                              </div>
                              <select class="form-control">
                                <option value="" disabled selected>Choisir le prof</option>
                                <option>Ayoub</option>
                                <option>Yasser</option>
                                <option>Abdelmourhit</option>
                              </select>
                            </td>
                          </tr>
                          <!--*********************************************************************-->
                          <tr>
                            <td style="width:20%">Mercredi</td>
                            <td style="width:40%">
                              <select class="form-control">
                                <option value="" disabled selected>Choise une Matiére</option>
                                <option>Français</option>
                                <option>Arabe</option>
                                <option>Math</option>
                              </select>
                              <div class="row">
                                <div class="col-md-6">
                                  de :
                                  <select class="form-control">
                                    <option></option>
                                    <option>08:00</option>
                                    <option>08:30</option>
                                    <option>09:00</option>
                                    <option>09:30</option>
                                  </select>
                                </div>
                                <div class="col-md-6">
                                  à :
                                  <select class="form-control">
                                    <option></option>
                                    <option>08:30</option>
                                    <option>09:00</option>
                                    <option>09:30</option>
                                    <option>10:00</option>
                                  </select>
                                </div>
                              </div>
                              <select class="form-control">
                                <option value="" disabled selected>Choisir le prof</option>
                                <option>Ayoub</option>
                                <option>Yasser</option>
                                <option>Abdelmourhit</option>
                              </select>
                            </td>
                            <td style="width:40%">
                              <select class="form-control">
                                <option value="" disabled selected>Choise une Matiére</option>
                                <option>Français</option>
                                <option>Arabe</option>
                                <option>Math</option>
                              </select>
                              <div class="row">
                                <div class="col-md-6">
                                  de :
                                  <select class="form-control">
                                    <option></option>
                                    <option>10:00</option>
                                    <option>10:30</option>
                                    <option>11:00</option>
                                    <option>11:30</option>
                                  </select>
                                </div>
                                <div class="col-md-6">
                                  à :
                                  <select class="form-control">
                                    <option></option>
                                    <option>10:30</option>
                                    <option>11:00</option>
                                    <option>11:30</option>
                                    <option>12:00</option>
                                  </select>
                                </div>
                              </div>
                              <select class="form-control">
                                <option value="" disabled selected>Choisir le prof</option>
                                <option>Ayoub</option>
                                <option>Yasser</option>
                                <option>Abdelmourhit</option>
                              </select>
                            </td>
                          </tr>
                          <!--*********************************************************************-->
                          <tr>
                            <td style="width:20%">Jeudi</td>
                            <td style="width:40%">
                              <select class="form-control">
                                <option value="" disabled selected>Choise une Matiére</option>
                                <option>Français</option>
                                <option>Arabe</option>
                                <option>Math</option>
                              </select>
                              <div class="row">
                                <div class="col-md-6">
                                  de :
                                  <select class="form-control">
                                    <option></option>
                                    <option>08:00</option>
                                    <option>08:30</option>
                                    <option>09:00</option>
                                    <option>09:30</option>
                                  </select>
                                </div>
                                <div class="col-md-6">
                                  à :
                                  <select class="form-control">
                                    <option></option>
                                    <option>08:30</option>
                                    <option>09:00</option>
                                    <option>09:30</option>
                                    <option>10:00</option>
                                  </select>
                                </div>
                              </div>
                              <select class="form-control">
                                <option value="" disabled selected>Choisir le prof</option>
                                <option>Ayoub</option>
                                <option>Yasser</option>
                                <option>Abdelmourhit</option>
                              </select>
                            </td>
                            <td style="width:40%">
                              <select class="form-control">
                                <option value="" disabled selected>Choise une Matiére</option>
                                <option>Français</option>
                                <option>Arabe</option>
                                <option>Math</option>
                              </select>
                              <div class="row">
                                <div class="col-md-6">
                                  de :
                                  <select class="form-control">
                                    <option></option>
                                    <option>10:00</option>
                                    <option>10:30</option>
                                    <option>11:00</option>
                                    <option>11:30</option>
                                  </select>
                                </div>
                                <div class="col-md-6">
                                  à :
                                  <select class="form-control">
                                    <option></option>
                                    <option>10:30</option>
                                    <option>11:00</option>
                                    <option>11:30</option>
                                    <option>12:00</option>
                                  </select>
                                </div>
                              </div>
                              <select class="form-control">
                                <option value="" disabled selected>Choisir le prof</option>
                                <option>Ayoub</option>
                                <option>Yasser</option>
                                <option>Abdelmourhit</option>
                              </select>
                            </td>
                          </tr>
                          <!--*********************************************************************-->
                          <tr>
                            <td style="width:20%">Vendredi</td>
                            <td style="width:40%">
                              <select class="form-control">
                                <option value="" disabled selected>Choise une Matiére</option>
                                <option>Français</option>
                                <option>Arabe</option>
                                <option>Math</option>
                              </select>
                              <div class="row">
                                <div class="col-md-6">
                                  de :
                                  <select class="form-control">
                                    <option></option>
                                    <option>08:00</option>
                                    <option>08:30</option>
                                    <option>09:00</option>
                                    <option>09:30</option>
                                  </select>
                                </div>
                                <div class="col-md-6">
                                  à :
                                  <select class="form-control">
                                    <option></option>
                                    <option>08:30</option>
                                    <option>09:00</option>
                                    <option>09:30</option>
                                    <option>10:00</option>
                                  </select>
                                </div>
                              </div>
                              <select class="form-control">
                                <option value="" disabled selected>Choisir le prof</option>
                                <option>Ayoub</option>
                                <option>Yasser</option>
                                <option>Abdelmourhit</option>
                              </select>
                            </td>
                            <td style="width:40%">
                              <select class="form-control">
                                <option value="" disabled selected>Choise une Matiére</option>
                                <option>Français</option>
                                <option>Arabe</option>
                                <option>Math</option>
                              </select>
                              <div class="row">
                                <div class="col-md-6">
                                  de :
                                  <select class="form-control">
                                    <option></option>
                                    <option>10:00</option>
                                    <option>10:30</option>
                                    <option>11:00</option>
                                    <option>11:30</option>
                                  </select>
                                </div>
                                <div class="col-md-6">
                                  à :
                                  <select class="form-control">
                                    <option></option>
                                    <option>10:30</option>
                                    <option>11:00</option>
                                    <option>11:30</option>
                                    <option>12:00</option>
                                  </select>
                                </div>
                              </div>
                              <select class="form-control">
                                <option value="" disabled selected>Choisir le prof</option>
                                <option>Ayoub</option>
                                <option>Yasser</option>
                                <option>Abdelmourhit</option>
                              </select>
                            </td>
                          </tr>
                          <!--*********************************************************************-->
                          <tr>
                            <td style="width:20%">Samedi</td>
                            <td style="width:40%">
                              <select class="form-control">
                                <option value="" disabled selected>Choise une Matiére</option>
                                <option>Français</option>
                                <option>Arabe</option>
                                <option>Math</option>
                              </select>
                              <div class="row">
                                <div class="col-md-6">
                                  de :
                                  <select class="form-control">
                                    <option></option>
                                    <option>08:00</option>
                                    <option>08:30</option>
                                    <option>09:00</option>
                                    <option>09:30</option>
                                  </select>
                                </div>
                                <div class="col-md-6">
                                  à :
                                  <select class="form-control">
                                    <option></option>
                                    <option>08:30</option>
                                    <option>09:00</option>
                                    <option>09:30</option>
                                    <option>10:00</option>
                                  </select>
                                </div>
                              </div>
                              <select class="form-control">
                                <option value="" disabled selected>Choisir le prof</option>
                                <option>Ayoub</option>
                                <option>Yasser</option>
                                <option>Abdelmourhit</option>
                              </select>
                            </td>
                            <td style="width:40%">
                              <select class="form-control">
                                <option value="" disabled selected>Choise une Matiére</option>
                                <option>Français</option>
                                <option>Arabe</option>
                                <option>Math</option>
                              </select>
                              <div class="row">
                                <div class="col-md-6">
                                  de :
                                  <select class="form-control">
                                    <option></option>
                                    <option>10:00</option>
                                    <option>10:30</option>
                                    <option>11:00</option>
                                    <option>11:30</option>
                                  </select>
                                </div>
                                <div class="col-md-6">
                                  à :
                                  <select class="form-control">
                                    <option></option>
                                    <option>10:30</option>
                                    <option>11:00</option>
                                    <option>11:30</option>
                                    <option>12:00</option>
                                  </select>
                                </div>
                              </div>
                              <select class="form-control">
                                <option value="" disabled selected>Choisir le prof</option>
                                <option>Ayoub</option>
                                <option>Yasser</option>
                                <option>Abdelmourhit</option>
                              </select>
                            </td>
                          </tr>
                        </tbody>
                      </table>
<!-- end Matin*********************************************************************-->
<!-- Apres midi*********************************************************************-->
                      <h1 style="text-align:center;">Apres Midi</h1>
                      <table class="table table-bordered">
                        <thead>
                          <tr>
                            <th style="width:20%">Jours/Heures</th>
                            <th style="width:40%">
                              <div class="row">
                                <div class="col-md-6">14H00</div>
                                <div class="col-md-6" style="text-align:right">16H00</div>
                              </div>
                            </th>
                            <th style="width:40%">
                              <div class="row">
                                <div class="col-md-6">16H00</div>
                                <div class="col-md-6" style="text-align:right">18H00</div>
                              </div>
                            </th>
                          </tr>
                        </thead>
                        <tbody>
                          <tr>
                            <td style="width:20%">LUNDI</td>
                            <td style="width:40%">
                              <select class="form-control">
                                <option value="" disabled selected>Choise une Matiére</option>
                                <option>Français</option>
                                <option>Arabe</option>
                                <option>Math</option>
                              </select>
                              <div class="row">
                                <div class="col-md-6">
                                  de :
                                  <select class="form-control">
                                    <option></option>
                                    <option>14:00</option>
                                    <option>14:30</option>
                                    <option>15:00</option>
                                    <option>15:30</option>
                                  </select>
                                </div>
                                <div class="col-md-6">
                                  à :
                                  <select class="form-control">
                                    <option></option>
                                    <option>14:30</option>
                                    <option>15:00</option>
                                    <option>15:30</option>
                                    <option>16:00</option>
                                  </select>
                                </div>
                              </div>
                              <select class="form-control">
                                <option value="" disabled selected>Choisir le prof</option>
                                <option>Ayoub</option>
                                <option>Yasser</option>
                                <option>Abdelmourhit</option>
                              </select>
                            </td>
                            <td style="width:40%">
                              <select class="form-control">
                                <option value="" disabled selected>Choise une Matiére</option>
                                <option>Français</option>
                                <option>Arabe</option>
                                <option>Math</option>
                              </select>
                              <div class="row">
                                <div class="col-md-6">
                                  de :
                                  <select class="form-control">
                                    <option></option>
                                    <option>16:00</option>
                                    <option>16:30</option>
                                    <option>17:00</option>
                                    <option>17:30</option>
                                  </select>
                                </div>
                                <div class="col-md-6">
                                  à :
                                  <select class="form-control">
                                    <option></option>
                                    <option>16:30</option>
                                    <option>17:00</option>
                                    <option>17:30</option>
                                    <option>18:00</option>
                                  </select>
                                </div>
                              </div>
                              <select class="form-control">
                                <option value="" disabled selected>Choisir le prof</option>
                                <option>Ayoub</option>
                                <option>Yasser</option>
                                <option>Abdelmourhit</option>
                              </select>
                            </td>
                          </tr>
                          <!--*********************************************************************-->
                          <tr>
                            <td style="width:20%">Mardi</td>
                            <td style="width:40%">
                              <select class="form-control">
                                <option value="" disabled selected>Choise une Matiére</option>
                                <option>Français</option>
                                <option>Arabe</option>
                                <option>Math</option>
                              </select>
                              <div class="row">
                                <div class="col-md-6">
                                  de :
                                  <select class="form-control">
                                    <option></option>
                                    <option>14:00</option>
                                    <option>14:30</option>
                                    <option>15:00</option>
                                    <option>15:30</option>
                                  </select>
                                </div>
                                <div class="col-md-6">
                                  à :
                                  <select class="form-control">
                                    <option></option>
                                    <option>14:30</option>
                                    <option>15:00</option>
                                    <option>15:30</option>
                                    <option>16:00</option>
                                  </select>
                                </div>
                              </div>
                              <select class="form-control">
                                <option value="" disabled selected>Choisir le prof</option>
                                <option>Ayoub</option>
                                <option>Yasser</option>
                                <option>Abdelmourhit</option>
                              </select>
                            </td>
                            <td style="width:40%">
                              <select class="form-control">
                                <option value="" disabled selected>Choise une Matiére</option>
                                <option>Français</option>
                                <option>Arabe</option>
                                <option>Math</option>
                              </select>
                              <div class="row">
                                <div class="col-md-6">
                                  de :
                                  <select class="form-control">
                                    <option></option>
                                    <option>16:00</option>
                                    <option>16:30</option>
                                    <option>17:00</option>
                                    <option>17:30</option>
                                  </select>
                                </div>
                                <div class="col-md-6">
                                  à :
                                  <select class="form-control">
                                    <option></option>
                                    <option>16:30</option>
                                    <option>17:00</option>
                                    <option>17:30</option>
                                    <option>18:00</option>
                                  </select>
                                </div>
                              </div>
                              <select class="form-control">
                                <option value="" disabled selected>Choisir le prof</option>
                                <option>Ayoub</option>
                                <option>Yasser</option>
                                <option>Abdelmourhit</option>
                              </select>
                            </td>
                          </tr>
                          <!--*********************************************************************-->
                          <tr>
                            <td style="width:20%">Mercredi</td>
                            <td style="width:40%">
                              <select class="form-control">
                                <option value="" disabled selected>Choise une Matiére</option>
                                <option>Français</option>
                                <option>Arabe</option>
                                <option>Math</option>
                              </select>
                              <div class="row">
                                <div class="col-md-6">
                                  de :
                                  <select class="form-control">
                                    <option></option>
                                    <option>14:00</option>
                                    <option>14:30</option>
                                    <option>15:00</option>
                                    <option>15:30</option>
                                  </select>
                                </div>
                                <div class="col-md-6">
                                  à :
                                  <select class="form-control">
                                    <option></option>
                                    <option>14:30</option>
                                    <option>15:00</option>
                                    <option>15:30</option>
                                    <option>16:00</option>
                                  </select>
                                </div>
                              </div>
                              <select class="form-control">
                                <option value="" disabled selected>Choisir le prof</option>
                                <option>Ayoub</option>
                                <option>Yasser</option>
                                <option>Abdelmourhit</option>
                              </select>
                            </td>
                            <td style="width:40%">
                              <select class="form-control">
                                <option value="" disabled selected>Choise une Matiére</option>
                                <option>Français</option>
                                <option>Arabe</option>
                                <option>Math</option>
                              </select>
                              <div class="row">
                                <div class="col-md-6">
                                  de :
                                  <select class="form-control">
                                    <option></option>
                                    <option>16:00</option>
                                    <option>16:30</option>
                                    <option>17:00</option>
                                    <option>17:30</option>
                                  </select>
                                </div>
                                <div class="col-md-6">
                                  à :
                                  <select class="form-control">
                                    <option></option>
                                    <option>16:30</option>
                                    <option>17:00</option>
                                    <option>17:30</option>
                                    <option>18:00</option>
                                  </select>
                                </div>
                              </div>
                              <select class="form-control">
                                <option value="" disabled selected>Choisir le prof</option>
                                <option>Ayoub</option>
                                <option>Yasser</option>
                                <option>Abdelmourhit</option>
                              </select>
                            </td>
                          </tr>
                          <!--*********************************************************************-->
                          <tr>
                            <td style="width:20%">Jeudi</td>
                            <td style="width:40%">
                              <select class="form-control">
                                <option value="" disabled selected>Choise une Matiére</option>
                                <option>Français</option>
                                <option>Arabe</option>
                                <option>Math</option>
                              </select>
                              <div class="row">
                                <div class="col-md-6">
                                  de :
                                  <select class="form-control">
                                    <option></option>
                                    <option>14:00</option>
                                    <option>14:30</option>
                                    <option>15:00</option>
                                    <option>15:30</option>
                                  </select>
                                </div>
                                <div class="col-md-6">
                                  à :
                                  <select class="form-control">
                                    <option></option>
                                    <option>14:30</option>
                                    <option>15:00</option>
                                    <option>15:30</option>
                                    <option>16:00</option>
                                  </select>
                                </div>
                              </div>
                              <select class="form-control">
                                <option value="" disabled selected>Choisir le prof</option>
                                <option>Ayoub</option>
                                <option>Yasser</option>
                                <option>Abdelmourhit</option>
                              </select>
                            </td>
                            <td style="width:40%">
                              <select class="form-control">
                                <option value="" disabled selected>Choise une Matiére</option>
                                <option>Français</option>
                                <option>Arabe</option>
                                <option>Math</option>
                              </select>
                              <div class="row">
                                <div class="col-md-6">
                                  de :
                                  <select class="form-control">
                                    <option></option>
                                    <option>16:00</option>
                                    <option>16:30</option>
                                    <option>17:00</option>
                                    <option>17:30</option>
                                  </select>
                                </div>
                                <div class="col-md-6">
                                  à :
                                  <select class="form-control">
                                    <option></option>
                                    <option>16:30</option>
                                    <option>17:00</option>
                                    <option>17:30</option>
                                    <option>18:00</option>
                                  </select>
                                </div>
                              </div>
                              <select class="form-control">
                                <option value="" disabled selected>Choisir le prof</option>
                                <option>Ayoub</option>
                                <option>Yasser</option>
                                <option>Abdelmourhit</option>
                              </select>
                            </td>
                          </tr>
                          <!--*********************************************************************-->
                          <tr>
                            <td style="width:20%">Vendredi</td>
                            <td style="width:40%">
                              <select class="form-control">
                                <option value="" disabled selected>Choise une Matiére</option>
                                <option>Français</option>
                                <option>Arabe</option>
                                <option>Math</option>
                              </select>
                              <div class="row">
                                <div class="col-md-6">
                                  de :
                                  <select class="form-control">
                                    <option></option>
                                    <option>14:00</option>
                                    <option>14:30</option>
                                    <option>15:00</option>
                                    <option>15:30</option>
                                  </select>
                                </div>
                                <div class="col-md-6">
                                  à :
                                  <select class="form-control">
                                    <option></option>
                                    <option>14:30</option>
                                    <option>15:00</option>
                                    <option>15:30</option>
                                    <option>16:00</option>
                                  </select>
                                </div>
                              </div>
                              <select class="form-control">
                                <option value="" disabled selected>Choisir le prof</option>
                                <option>Ayoub</option>
                                <option>Yasser</option>
                                <option>Abdelmourhit</option>
                              </select>
                            </td>
                            <td style="width:40%">
                              <select class="form-control">
                                <option value="" disabled selected>Choise une Matiére</option>
                                <option>Français</option>
                                <option>Arabe</option>
                                <option>Math</option>
                              </select>
                              <div class="row">
                                <div class="col-md-6">
                                  de :
                                  <select class="form-control">
                                    <option></option>
                                    <option>16:00</option>
                                    <option>16:30</option>
                                    <option>17:00</option>
                                    <option>17:30</option>
                                  </select>
                                </div>
                                <div class="col-md-6">
                                  à :
                                  <select class="form-control">
                                    <option></option>
                                    <option>16:30</option>
                                    <option>17:00</option>
                                    <option>17:30</option>
                                    <option>18:00</option>
                                  </select>
                                </div>
                              </div>
                              <select class="form-control">
                                <option value="" disabled selected>Choisir le prof</option>
                                <option>Ayoub</option>
                                <option>Yasser</option>
                                <option>Abdelmourhit</option>
                              </select>
                            </td>
                          </tr>
                          <!--*********************************************************************-->
                          <tr>
                            <td style="width:20%">Samedi</td>
                            <td style="width:40%">
                              <select class="form-control">
                                <option value="" disabled selected>Choise une Matiére</option>
                                <option>Français</option>
                                <option>Arabe</option>
                                <option>Math</option>
                              </select>
                              <div class="row">
                                <div class="col-md-6">
                                  de :
                                  <select class="form-control">
                                    <option></option>
                                    <option>14:00</option>
                                    <option>14:30</option>
                                    <option>15:00</option>
                                    <option>15:30</option>
                                  </select>
                                </div>
                                <div class="col-md-6">
                                  à :
                                  <select class="form-control">
                                    <option></option>
                                    <option>14:30</option>
                                    <option>15:00</option>
                                    <option>15:30</option>
                                    <option>16:00</option>
                                  </select>
                                </div>
                              </div>
                              <select class="form-control">
                                <option value="" disabled selected>Choisir le prof</option>
                                <option>Ayoub</option>
                                <option>Yasser</option>
                                <option>Abdelmourhit</option>
                              </select>
                            </td>
                            <td style="width:40%">
                              <select class="form-control">
                                <option value="" disabled selected>Choise une Matiére</option>
                                <option>Français</option>
                                <option>Arabe</option>
                                <option>Math</option>
                              </select>
                              <div class="row">
                                <div class="col-md-6">
                                  de :
                                  <select class="form-control">
                                    <option></option>
                                    <option>16:00</option>
                                    <option>16:30</option>
                                    <option>17:00</option>
                                    <option>17:30</option>
                                  </select>
                                </div>
                                <div class="col-md-6">
                                  à :
                                  <select class="form-control">
                                    <option></option>
                                    <option>16:30</option>
                                    <option>17:00</option>
                                    <option>17:30</option>
                                    <option>18:00</option>
                                  </select>
                                </div>
                              </div>
                              <select class="form-control">
                                <option value="" disabled selected>Choisir le prof</option>
                                <option>Ayoub</option>
                                <option>Yasser</option>
                                <option>Abdelmourhit</option>
                              </select>
                            </td>
                          </tr>
                        </tbody>
                      </table>


<!-- end emploi *************************************************************************-->


                  </div>
              </div><!-- col-lg-12-->
            </div><!-- /row -->


		</section><! --/wrapper -->
      </section><!-- /MAIN CONTENT -->


      <!--main content end-->


    <!-- js placed at the end of the document so the pages load faster -->
    <script src="assets/js/jquery.js"></script>
    <script src="assets/js/jquery-1.8.3.min.js"></script>
    <script src="assets/js/bootstrap.min.js"></script>
    <script class="include" type="text/javascript" src="assets/js/jquery.dcjqaccordion.2.7.js"></script>
    <script src="assets/js/jquery.scrollTo.min.js"></script>
    <script src="assets/js/jquery.nicescroll.js" type="text/javascript"></script>
    <script src="assets/js/jquery.sparkline.js"></script>


    <!--common script for all pages-->
    <script src="assets/js/common-scripts.js"></script>

    <script type="text/javascript" src="assets/js/gritter/js/jquery.gritter.js"></script>
    <script type="text/javascript" src="assets/js/gritter-conf.js"></script>

    <!--script for this page-->
    <script src="assets/js/sparkline-chart.js"></script>
	<script src="assets/js/zabuto_calendar.js"></script>

	<script type="application/javascript">
        $(document).ready(function () {
            $("#date-popover").popover({html: true, trigger: "manual"});
            $("#date-popover").hide();
            $("#date-popover").click(function (e) {
                $(this).hide();
            });

            $("#my-calendar").zabuto_calendar({
                action: function () {
                    return myDateFunction(this.id, false);
                },
                action_nav: function () {
                    return myNavFunction(this.id);
                },
                ajax: {
                    url: "show_data.php?action=1",
                    modal: true
                },
                legend: [
                    {type: "text", label: "Special event", badge: "00"},
                    {type: "block", label: "Regular event", }
                ]
            });
        });


        function myNavFunction(id) {
            $("#date-popover").hide();
            var nav = $("#" + id).data("navigation");
            var to = $("#" + id).data("to");
            console.log('nav ' + nav + ' to: ' + to.month + '/' + to.year);
        }
    </script>


@endsection
