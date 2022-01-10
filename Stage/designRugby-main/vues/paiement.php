<!-- <style type="text/css">
.card {
    border: none;
    max-width: 450px;
    border-radius: 15px;
    margin: 150px 0 150px;
    padding: 35px;
    padding-bottom: 20px !important
}

.heading {
    color: #C1C1C1;
    font-size: 14px;
    font-weight: 500
}

img {
    transform: translate(160px, -10px)
}

img:hover {
    cursor: pointer
}

.text-warning {
    font-size: 12px;
    font-weight: 500;
    color: #edb537 !important
}

#cno {
    transform: translateY(-10px)
}

input {
    border-bottom: 1.5px solid #E8E5D2 !important;
    font-weight: bold;
    border-radius: 0;
    border: 0
}

.form-group input:focus {
    border: 0;
    outline: 0
}

.col-sm-5 {
    padding-left: 90px
}

.btn {
    background: #F3A002 !important;
    border: none;
    border-radius: 30px
}

.btn:focus {
    box-shadow: none
}
</style>

<div class="container-fluid">
    <div class="row d-flex justify-content-center">
        <div class="col-sm-12">
            <div class="card mx-auto">
                <p class="heading">PAIEMENT</p>
                <form class="card-details ">
                    <div class="form-group mb-0">
                        <p class="text-warning mb-0">Numero de carte </p> <input type="text" name="card-num" placeholder="numero de carte" size="17" id="cno" minlength="19" maxlength="19"> <img src="https://img.icons8.com/color/48/000000/visa.png" width="64px" height="60px" />
                    </div>
                    <div class="form-group">
                        <p class="text-warning mb-0">Titulaire de la carte</p> <input type="text" name="name" placeholder="Nom et prénom" size="17">
                    </div>
                    <div class="form-group pt-2">
                        <div class="row d-flex">
                            <div class="col-sm-4">
                                <p class="text-warning mb-0">Expiration</p> <input type="text" name="exp" placeholder="MM/AAAA" size="7" id="exp" minlength="7" maxlength="7">
                            </div>
                            <div class="col-sm-3">
                                <p class="text-warning mb-0">CVV</p> <input type="password" name="cvv" placeholder="&#9679;&#9679;&#9679;" size="1" minlength="3" maxlength="3">
                            </div>
                            <div class="col-sm-5 pt-0"> <button type="button" class="btn btn-primary"><i class="fas fa-arrow-right px-3 py-2"></i></button> </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>







 -->






<link rel="stylesheet" href="styles/stylePaiement.css">

<!--CREDIT CART PAYMENT-->

<br><br>
<div class="container-sm" style="max-width: 600px; margin: 0 auto;">
                    <div class="panel panel-info">
                        <div class="panel-heading"><span><i class="glyphicon glyphicon-lock"></i></span> Paiement sécurisé</div>
                        <div class="panel-body">
                            <div class="form-group">
                                <div class="col-md-12"><strong>Type de la carte :</strong></div>
                                <div class="col-md-12">
                                    <select id="CreditCardType" name="TypeCarte" class="form-control">
                                        <option value="5">Visa</option>
                                        <option value="6">MasterCard</option>
                                        <option value="7">American Express</option>
                                        <option value="8">Discover</option>
                                    </select>
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="col-md-12"><strong>Titulaire de la carte:</strong></div>
                                <div class="col-md-12"><input type="text" class="form-control" name="titulaire" value="" /></div>
                            </div>
                            <div class="form-group">
                                <div class="col-md-12"><strong>Numéro de carte:</strong></div>
                                <div class="col-md-12"><input type="text" class="form-control" minlength="19" maxlength="19" name="car_number" value="" /></div>
                            </div>
                            <div class="form-group">
                                <div class="col-md-12"><strong>CVV:</strong></div>
                                <div class="col-md-12"><input type="password" class="form-control" minlength="3" maxlength="3" name="car_code" value="" /></div>
                            </div>
                            <div class="form-group">
                                <div class="col-md-12">
                                    <strong>Date d'expiration </strong>
                                </div>
                                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                    <select class="form-control" name="">
                                        <option value="">Mois</option>
                                        <option value="01">01</option>
                                        <option value="02">02</option>
                                        <option value="03">03</option>
                                        <option value="04">04</option>
                                        <option value="05">05</option>
                                        <option value="06">06</option>
                                        <option value="07">07</option>
                                        <option value="08">08</option>
                                        <option value="09">09</option>
                                        <option value="10">10</option>
                                        <option value="11">11</option>
                                        <option value="12">12</option>
                                </select>
                                </div>
                                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                    <select class="form-control" name="">
                                        <option value="">Année</option>
                                        <option value="2021">2021</option>
                                        <option value="2022">2022</option>
                                        <option value="2023">2023</option>
                                        <option value="2024">2024</option>
                                        <option value="2025">2025</option>
                                        <option value="2016">2026</option>
                                        <option value="2017">2027</option>
                                        <option value="2018">2028</option>
                                        <option value="2019">2029</option>
                                        <option value="2020">2030</option>
                                </select>
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="col-md-12">
                                    <span>Pay secure using your credit card.</span>
                                </div>
                                <div class="col-md-12">
                                    <ul class="cards">
                                        <li class="visa hand">Visa</li>
                                        <li class="mastercard hand">MasterCard</li>
                                    </ul>
                                    <div class="clearfix"></div>
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="col-md-6 col-sm-6 col-xs-12">
                                    <button type="submit" class="btn btn-primary btn-submit-fix">Valider le paiement</button>
                                </div>
                            </div>
                        </div>
                    </div>
    </div>
<br>
    <br><br><br>
                    <!--CREDIT CART PAYMENT END-->