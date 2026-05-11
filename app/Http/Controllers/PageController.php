<?php

namespace App\Http\Controllers;

use Illuminate\View\View;

class PageController extends Controller
{
    public function tecnologia(): View
    {
        return view('pages.tecnologia');
    }

    public function resultados(): View
    {
        return view('pages.resultados');
    }

    public function faq(): View
    {
        $items = [
            [
                'q' => '¿Los productos Treemix Profesional son aptos para cultivo orgánico?',
                'a' => 'Sí. Toda la línea está formulada con principios activos biológicos y biotecnológicos. No contienen agroquímicos sintéticos y son compatibles con certificaciones de manejo orgánico.',
            ],
            [
                'q' => '¿En qué se diferencia la línea Profesional de la línea estándar?',
                'a' => 'La línea Profesional utiliza concentraciones aumentadas, cepas seleccionadas y formulaciones desarrolladas específicamente para cultivadores que buscan rendimiento y trazabilidad consistente ciclo tras ciclo.',
            ],
            [
                'q' => '¿Pueden combinarse entre sí los productos de la línea?',
                'a' => 'Toda la línea está diseñada para trabajar en conjunto. El Kit Profesional incluye el protocolo completo de aplicación, con dosis y frecuencias optimizadas para cada etapa del ciclo.',
            ],
            [
                'q' => '¿Cuál es la vida útil de los productos?',
                'a' => '24 meses desde la fecha de elaboración, conservados en lugar fresco y seco, lejos de la luz solar directa. Una vez abiertos, recomendamos consumir dentro de 12 meses para garantizar máxima viabilidad biológica.',
            ],
            [
                'q' => '¿Hacen envíos a todo el país?',
                'a' => 'Sí. Realizamos envíos a toda Argentina desde nuestro laboratorio en Buenos Aires. Para distribuidores y cultivos profesionales contamos con logística directa y condiciones especiales.',
            ],
            [
                'q' => '¿Ofrecen asesoramiento técnico?',
                'a' => 'Los clientes de la línea Profesional cuentan con soporte directo de nuestro equipo de biotecnólogos. Asesoramiento personalizado de protocolos, análisis de resultados y diagnóstico de problemas.',
            ],
        ];

        return view('pages.faq', compact('items'));
    }
}
