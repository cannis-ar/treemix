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
					'a' => 'Sí. Toda la línea Profesional está formulada con ingredientes de origen biológico, veganos, agroecológicos y cruelty free. Son compatibles con métodos de cultivo orgánico, living soil e hidroponia (excepto los biominerales, que por su componente orgánico no son aptos para hidroponia).',
				],
				[
					'q' => '¿En qué se diferencia la línea Profesional de la línea estándar?',
					'a' => 'La línea Profesional utiliza concentraciones aumentadas, lo que se traduce en mayor rendimiento por litro. Además, los productos se entregan recién salidos del laboratorio sin intermediarios, preservando la frescura de los organismos vivos. Los productos biológicos alcanzan su mejor exponencial cuando son recién elaborados. Disponibles en presentaciones de 1, 5 y 20 litros.',
				],
				[
					'q' => '¿Pueden combinarse entre sí los productos de la línea?',
					'a' => 'Sí, los productos están diseñados para trabajar en conjunto. Cada uno cubre una etapa específica del ciclo y se complementan entre sí para potenciar los resultados. Podés armar un plan de cultivo completo o elegir solo los que se adapten a tu metodología.',
				],
				[
					'q' => '¿Se pueden combinar con sales o fertilizantes de otras marcas?',
					'a' => 'Sí, es ampliamente recomendable. Productos como el Treemix A maximizan la biodisponibilidad de nutrientes, mientras que el ZYM rompe las moléculas orgánicas mejorando notablemente su absorción y eliminando rastros de sales en la materia vegetal. El resultado es mejor sabor, ceniza blanca y humo suave, sin que "pique" en la garganta.',
				],
				[
					'q' => '¿Treemix sirve para cultivos a escala?',
					'a' => 'Treemix está especialmente diseñado para cultivos de alto rendimiento. Es por eso que es una de las marcas más usadas por ONGs dedicadas a cultivos orgánicos y de living soil, siendo reconocida por su alta calidad y consistencia en grandes superficies.',
				],
				[
					'q' => '¿Por qué conviene usar Treemix en un gran cultivo o asociación?',
					'a' => 'No solo previene inconvenientes y asegura la supervivencia de las plantas, sino que trabaja sobre el aumento de producción y la mejora de calidad. Por ejemplo, un bidón de BioK-NN de 5 lt rinde 100.000 litros de solución y puede representar una inversión mínima por gramo producido. El uso combinado de BioK-NN, PRO y A aumenta la producción, mientras que el ZYM eleva la calidad final del cultivo, mejorando el valor del producto cosechado.',
				],
				[
					'q' => '¿Ofrecen asesoramiento técnico?',
					'a' => 'Los clientes de la línea Profesional cuentan con soporte directo de nuestro equipo de biotecnólogos: asesoramiento personalizado de protocolos, análisis de resultados y diagnóstico de problemas.',
				],
			];

			return view('pages.faq', compact('items'));
    }
}
