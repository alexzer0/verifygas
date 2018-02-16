@extends('layouts.default') @section('content')
<h1 class="page-title">Pre-aprobación financiera:</h1>
<ol class="breadcrumb">
  <li class="breadcrumb-item">
    <a href="../index.html">Home</a>
  </li>
  <li class="breadcrumb-item">
    <a href="javascript:void(0)">Forms</a>
  </li>
  <li class="breadcrumb-item active">Pre-aprobación financiera</li>
</ol>
<div class="page-content container-fluid">
  <div class="row">

    <div class="col-lg-6 offset-lg-3">
      <!-- Panel Wizard Form Container -->
      <div class="panel" id="exampleWizardFormContainer">
        <div class="panel-heading">
          <h3 class="panel-title">Pasos para la pre-aprobación financiera:</h3>
        </div>
        <div class="panel-body">
          <!-- Steps -->
          <div class="pearls row">
            <div class="pearl current col-4">
              <div class="pearl-icon">
                <i class="icon wb-user" aria-hidden="true"></i>
              </div>
              <span class="pearl-title">Solicitante</span>
            </div>
            <div class="pearl col-4">
              <div class="pearl-icon">
                <i class="icon wb-payment" aria-hidden="true"></i>
              </div>
              <span class="pearl-title">Billing Info</span>
            </div>
            <div class="pearl col-4">
              <div class="pearl-icon">
                <i class="icon wb-check" aria-hidden="true"></i>
              </div>
              <span class="pearl-title">Confirmation</span>
            </div>
          </div>
          <!-- End Steps -->

          <!-- Wizard Content -->
          <form id="exampleFormContainer">
            <div class="wizard-content">
              <div class="wizard-pane active" id="exampleAccountOne" role="tabpanel">
                <div class="form-group">
                  <label class="form-control-label" for="inputUserNameOne">Nombres y Apellidos</label>
                  <input type="text" class="form-control" id="inputUserNameOne" name="username" required="required">
                </div>
                <div>
                  <div class="form-group">
                    <label class="form-control-label" for="inputUserNameOne">Tipo de Documento</label>
                    <select class="form-control">
                      <option>DNI</option>
                      <option>PASAPORTE</option>
                      <option>RUC</option>
                      <option>CE</option>
                    </select>
                  </div>
                </div>
                <div class="form-group">
                  <label class="form-control-label" for="inputPasswordOne">Ingresar el numero del documento</label>
                  <input type="text" class="form-control" id="inputUserNameOne" name="username" required="required">
                </div>
                <div class="form-group">
                  <label class="form-control-label" for="inputPasswordOne">Subir foto del documento</label>

                  <div class="input-group input-group-file" data-plugin="inputGroupFile">
                    <input type="text" class="form-control" readonly="">
                    <span class="input-group-btn">
                      <span class="btn btn-success btn-file">
                        <i class="icon wb-upload" aria-hidden="true"></i>
                        <input type="file" name="" multiple="">
                      </span>
                    </span>
                  </div>
                </div>
                <div class="form-group">
                  <label class="form-control-label" for="inputUserNameOne">Username</label>
                  <input type="text" class="form-control" id="inputUserNameOne" name="username" required="required">
                </div>
                <div class="form-group">
                  <label class="form-control-label" for="inputPasswordOne">Password</label>
                  <input type="password" class="form-control" id="inputPasswordOne" name="password" required="required">
                </div>
                <div class="form-group">
                  <label class="form-control-label" for="inputUserNameOne">Username</label>
                  <input type="text" class="form-control" id="inputUserNameOne" name="username" required="required">
                </div>
                <div class="form-group">
                  <label class="form-control-label" for="inputPasswordOne">Password</label>
                  <input type="password" class="form-control" id="inputPasswordOne" name="password" required="required">
                </div>
                <div class="form-group">
                  <label class="form-control-label" for="inputUserNameOne">Username</label>
                  <input type="text" class="form-control" id="inputUserNameOne" name="username" required="required">
                </div>
                <div class="form-group">
                  <label class="form-control-label" for="inputPasswordOne">Password</label>
                  <input type="password" class="form-control" id="inputPasswordOne" name="password" required="required">
                </div>
              </div>
              <div class="wizard-pane" id="exampleBillingOne" role="tabpanel">
                <div class="form-group">
                  <label class="form-control-label" for="inputCardNumberOne">Card Number</label>
                  <input type="text" class="form-control" id="inputCardNumberOne" name="number" placeholder="Card number">
                </div>
                <div class="form-group">
                  <label class="form-control-label" for="inputCVVOne">CVV</label>
                  <input type="text" class="form-control" id="inputCVVOne" name="cvv" placeholder="CVV">
                </div>
              </div>
              <div class="wizard-pane" id="exampleGettingOne" role="tabpanel">
                <div class="text-center my-20">
                  <h4>Please confrim your order.</h4>
                  <div class="table-responsive">
                    <table class="table table-hover text-right">
                      <thead>
                        <tr>
                          <th class="text-center">#</th>
                          <th>Description</th>
                          <th class="text-right">Quantity</th>
                          <th class="text-right">Unit Cost</th>
                          <th class="text-right">Total</th>
                        </tr>
                      </thead>
                      <tbody>
                        <tr>
                          <td class="text-center">1</td>
                          <td class="text-left">Server hardware purchase</td>
                          <td>32</td>
                          <td>$75</td>
                          <td>$2152</td>
                        </tr>
                        <tr>
                          <td class="text-center">2</td>
                          <td class="text-left">Office furniture purchase</td>
                          <td>15</td>
                          <td>$169</td>
                          <td>$4169</td>
                        </tr>
                        <tr>
                          <td class="text-center">3</td>
                          <td class="text-left">Company Anual Dinner Catering</td>
                          <td>69</td>
                          <td>$49</td>
                          <td>$1260</td>
                        </tr>
                      </tbody>
                    </table>
                  </div>
                </div>
              </div>
            </div>
          </form>
          <!-- Wizard Content -->
        </div>
      </div>
      <!-- End Panel Wizard Form Container -->
    </div>
  </div>





</div>
@endsection