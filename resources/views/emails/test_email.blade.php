<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Correo Test</title>
</head>
<body>
    <form>
      <center>
        <table border="0" cellpadding="0" cellspacing="0" height="100%" width="100%">
          <tbody>
            <tr>
              <td align="center" valign="top">
                <table border="0" cellpadding="0" cellspacing="0" style="width:100%;max-width:600px;background-color:#fff;margin:0 auto">
                  <tbody>
                    <tr>
                      <td style="height:1px;background-color:#ececec"></td>
                    </tr>
                    <tr>
                      <td class="" align="center" style="padding-top:20px;padding-bottom:20px">
                        <a href="" title="" style="color:#353e4a;text-decoration:none;font-family:'Arial';font-size:30px" target="_blank" data-saferedirecturl="">
                          <i style="padding-top:0;padding-right:0;padding-bottom:0;padding-left:0">
                            <b>Hola!</b>
                          </i>
                        </a>
                      </td>
                    </tr>
                    <tr>
                      <td class="" align="center" style="padding-right:30px;padding-bottom:20px;padding-left:20px;color:#17a2b8;font-family:'Arial';font-size:17px">
                        <br/>
                      </td>
                    </tr>
                    <tr>
                      <td style="height:1px;background-color:#d3d3d3">
                      </td>
                    </tr>
                    <tr>
                      <td style="font-size:0px">
                        <table width="100%" border="0" cellpadding="0" cellspacing="0" style="text-align:left">
                          <tbody>
                            <tr>
                              <td style="padding-top:10px;padding-bottom:10px;width:560px">
                                
                                  <table width="100%" border="0" cellpadding="0" cellspacing="0" style="background-color:#fff">
                                    <tbody>
                                      <tr>
                                        <td style="padding-left:15px;padding-bottom:5px;padding-top:3px;color:#000;font-size:15px;margin:0px">
                                        Su nombre de usuario es
                                          <a class="" href="" style="text-decoration:none;color:#1e82c4;font-size:16px;font-weight:bold" target="_blank" data-saferedirecturl="">
                                            {{$details['name']}} 
                                          </a>
                                        y su contraseña es 
                                          <a class="" href="" style="text-decoration:none;color:#1e82c4;font-size:16px;font-weight:bold" target="_blank" data-saferedirecturl="">
                                            {{$details['body']}}
                                          </a>
                                        </td>
                                      </tr>
                                      <!--tr>
                                        <td style="padding-left:15px;padding-bottom:3px;color:#000;font-size:15px;margin:0px">
                                          <span class=""> <span style="color:#666666">Carabobo</span>
                                          </span>
                                        </td>
                                      </tr-->
                                      <tr>
                                        <td class="" 
                                          style="color:#666666;padding-bottom:5px;text-align:left;font-size:15px;padding-left:15px;
                                          padding-top:4px;padding-right:10px">Si desea cambiar de contraseña por favor haga click en el botón a continuación.
                                        </td>
                                      </tr>
                                    </tbody>
                                  </table>
                                
                              </td>
                            </tr>
                          </tbody>
                        </table>
                      </td>
                    </tr>
                    <tr>
                      <td>
                        <table width="100%" border="0" cellpadding="0" cellspacing="0" align="center" bgcolor="#ffffff" style="color:#333333;margin:auto;background-color:#ffffff">
                          <tbody>
                            <tr><!-- boton-->
                              <td align="center" style="padding-bottom:25px;padding-top:25px;padding-left:20px;padding-right:20px">
                                <table style="margin:auto" align="center" border="0" cellpadding="0" cellspacing="0">
                                  <tbody>
                                    <tr>
                                      <td style="background-color:#17a2b8;font-family:Arial, sans-serif;font-size:18px;border-radius:5px;color:#ffffff;text-decoration:none;text-align:center">
                                        <a class="" style="color:#ffffff;text-decoration:none;width:200px;display:table-cell;
                                        padding-top:15px;padding-bottom:15px;vertical-align:middle" href="{{$details['link']}}" target="_blank" data-saferedirecturl="">
                                          <strong>Cambiar Contraseña</strong>
                                        </a>
                                      </td>
                                    </tr>
                                  </tbody>
                                </table>
                              </td>
                            </tr>
                          </tbody>
                        </table>
                      </td>
                    </tr>
                    <br/>
                    <tr>
                      <td class="" 
                        style="color:#666666;padding-bottom:5px;text-align:left;font-size:15px;padding-left:15px;
                        padding-top:4px;padding-right:10px">
                        Si No puede ingresar al presional el botón por favor coloque la siguiente url en su navegador {{$details['link']}}
                      </td>
                    </tr>
                  </tbody>
                </table>
              </td>
            </tr>
          </tbody>
        </table>
      </center>
  </form>
</body>
</html>