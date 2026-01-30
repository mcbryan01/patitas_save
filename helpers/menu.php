<?php

function configurar_menu($carpeta = '', $pagina = '')
{
    $menu = array();
    $menu_item = array(); 

    

    //opcion de menu de inicio
    $menu_item['is_active']=($pagina == "index") ? TRUE : FALSE;
    $menu_item['href']=($carpeta != '') ?  '../../index.php' : './index.php';
    $menu_item['text']='Inicio';
    $menu_item['submenu']=array();
    $menu['Inicio']=$menu_item;

    //opcion de menu de P2T1   
    $menu_item['is_active']=($pagina == "Nosotros") ? TRUE : FALSE;
    $menu_item['href']=($carpeta != '') ? './nosotros.php' : './portal/pages/nosotros.php' ;
    $menu_item['text']='Nosotros';
    $menu_item['submenu']=array();
    $menu['nosotros']=$menu_item;

    //opcion de menu de P2T3
    $menu_item['is_active']=($pagina == "denuncias") ? TRUE : FALSE;
    $menu_item['text']='Denuncias';
    $menu_item['href']=($carpeta != '') ? './denuncias.php' : './portal/pages/denuncias.php';
    $menu_item['submenu']=array();
    $menu['P2T3']= $menu_item;

    //opcion de menu de P2T4
    $menu_item['is_active']=($pagina == "adopcion") ? TRUE : FALSE;
    $menu_item['text']='Adopcion';
    $menu_item['href']=($carpeta != '') ? './adopcion.php' : './portal/pages/adopcion.php';
    $menu_item['submenu']=array();
    $menu['P2T4']= $menu_item;
    return $menu;
}

function crear_menu($carpeta = '', $pagina = ''){
    $menu = configurar_menu($carpeta, $pagina);
    $html = '';
    $html .= '<ul>';
        foreach($menu as $menu_item){
            if($menu_item["href"] != '#')
            {
                $html.='<li><a href="'.$menu_item["href"].'"> <span class="menu-title">'.$menu_item["text"].'</span> </a> </li>';
            }
            else
            {

                $html .= '<li ><img class="logo2" src="" alt="" height="25px"> </li>';
            }

        }
    $html .= '</ul>';
    return $html;
}

function footer($carpeta = '', $pagina = '')
{

  $html = ''; 

    $html .='  <footer style id="footer">
    <div class="footer-top">
      <div class="container">
        <div class="row">

          <div class="col-lg-4 col-md-6 footer-links">
            <h4>Navegacion</h4>
            <ul> ';
            $menu = configurar_menu($carpeta, $pagina);

            foreach($menu as $menu_item)
            {
              if($menu_item["href"] != '#')
                    {
                      $html .= '<li><i class="bx bx-chevron-right"></i> <a href="'.$menu_item["href"].'">'.$menu_item["text"].'</a></li>';
                        
                    }
                    else
                    {
        
                        
                    }
        
            }


            $html .= ' </ul>
          </div>

          <div class="col-lg-4 col-md-6">
            <div class="footer-info">
              <h3>PT<span>.</span></h3>
              <p>
                Patitas a salvo <br>
                cuida a quienes te protegen<br><br>
                <strong>Teléfono:</strong> +52 246 328 09 33 <br>
                <strong>Email:</strong> seguridad.publica@totolac.gob.mx<br>
              </p>
              <div class="social-links mt-3">
                <a href="https://www.facebook.com/AyuntamientoTotolac" class="facebook"><i class="bx bxl-facebook"></i></a>
              </div>
            </div>
          </div>

        </div>
      </div>
    </div>

    <div class="container">
      <div class="credits">
        <h1>Ayuntamiento del Municipio de San Juan Totolac</h1>
      </div>
    </div>
  </footer><!-- End Footer -->
';



    return $html;
}




