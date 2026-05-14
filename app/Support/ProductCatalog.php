<?php

namespace App\Support;

/**
 * Catálogo estático de productos Treemix Pro.
 *
 * Está pensado para migrarse después a una tabla `products` con
 * un modelo Eloquent + recurso Filament. Por ahora vive en código
 * para evitar overhead inicial y poder versionarlo en Git.
 */
class ProductCatalog
{
    /**
     * @return array<int, array<string, mixed>>
     */
    public static function all(): array
    {
        return [
            [
                'slug'        => 'tree-mix-mico',
                'name'        => 'Tree Mix MICO',
                'tagline'     => 'Inoculante de micorrizas',
                'short'       => 'Expande la red radicular. Potencia la absorción de agua y nutrientes desde el trasplante.',
                'description' => 'Inoculante micorrízico de alta concentración que coloniza las raíces y extiende el sistema radicular. Mejora la absorción de fósforo, agua y micronutrientes, reduciendo el estrés en trasplante y acelerando el establecimiento.',
                'features'    => [
                    'Colonización radicular desde el día 1',
                    'Mayor absorción de fósforo y agua',
                    'Reduce estrés por trasplante',
                    'Compatible con todos los sustratos',
                ],
                'badge'                => 'premium',
                'order'               => 1,
                'dosage'              => [
                    'ml_per_liter' => 1,
                    'applications' => 4,
                    'timing'       => '4 aplicaciones: trasplante y primeras semanas de vegetativo',
                ],
                'application_schedule' => ['stage' => 'trasplante', 'frequency' => 'semanal'],
            ],
            [
                'slug'        => 'tree-mix-pro',
                'name'        => 'Tree Mix PRO',
                'tagline'     => 'Bioestimulante base',
                'short'       => 'Estimula y protege en todo el ciclo. Fórmula base de la línea profesional.',
                'description' => 'Bioestimulante de amplio espectro formulado para acompañar cada etapa del cultivo. Activa el metabolismo, refuerza la respuesta inmune y mejora la eficiencia nutricional ciclo tras ciclo.',
                'features'    => [
                    'Aplicación semanal todo el ciclo',
                    'Activa el metabolismo vegetal',
                    'Refuerza la respuesta inmune',
                    'Base de la línea profesional',
                ],
                'badge'                => 'exclusivo',
                'order'               => 2,
                'dosage'              => [
                    'ml_per_liter' => 3,
                    'applications' => 'semanal',
                    'timing'       => 'Aplicación semanal durante todo el ciclo',
                ],
                'application_schedule' => ['stage' => 'todo el ciclo', 'frequency' => 'semanal'],
            ],
            [
                'slug'        => 'tree-mix-n',
                'name'        => 'Tree Mix N',
                'tagline'     => 'Complemento vegetativo',
                'short'       => 'Complemento nitrogenado para etapa vegetativa. Potencia el crecimiento y el follaje.',
                'description' => 'Formulación nitrogenada de origen biológico diseñada para la etapa vegetativa. Complementa el programa base aportando el nitrógeno disponible que la planta demanda durante el crecimiento activo.',
                'features'    => [
                    'Nitrógeno de origen biológico',
                    'Potencia crecimiento foliar',
                    'Complementa el programa PRO',
                    'Apto cultivos orgánicos',
                ],
                'badge'                => 'premium',
                'order'               => 3,
                'dosage'              => [
                    'ml_per_liter' => 2,
                    'applications' => 4,
                    'timing'       => '4 aplicaciones semanales durante vegetativo',
                ],
                'application_schedule' => ['stage' => 'vegetativo', 'frequency' => 'semanal'],
            ],
            [
                'slug'        => 'biok-nn',
                'name'        => 'Tree Mix BioK-NN',
                'tagline'     => 'Producto exclusivo',
                'short'       => 'Aumenta cannabinoides. Aporta nitrógeno atmosférico. Optimiza el rendimiento en etapas vegetativas y de floración.',
                'description' => 'Tecnología de fijación biológica de nitrógeno atmosférico desarrollada en laboratorio. BioK-NN incrementa significativamente los niveles de cannabinoides y mejora el desempeño del cultivo en todas las etapas críticas.',
                'features'    => [
                    'Fijación biológica de nitrógeno',
                    'Aumento medible de cannabinoides',
                    'Compatible con cultivos orgánicos',
                    'Apto vegetativo y floración',
                ],
                'badge'                => 'exclusivo',
                'order'               => 4,
                'dosage'              => [
                    'ml_per_liter' => 5,
                    'applications' => 6,
                    'timing'       => '6 aplicaciones: vegetativo y floración',
                ],
                'application_schedule' => ['stage' => 'vegetativo', 'frequency' => 'semanal'],
            ],
            [
                'slug'        => 'treemix-a',
                'name'        => 'Treemix A',
                'tagline'     => 'Calidad y producción',
                'short'       => 'Potencia la calidad y el rendimiento del fruto. Fórmula para pre-flora y floración.',
                'description' => 'Formulación de calidad orientada a maximizar el rendimiento y las características organolépticas del producto final. Actúa desde pre-flora reforzando la producción de aceites esenciales, aromas y densidad.',
                'features'    => [
                    'Aumenta producción de aceites esenciales',
                    'Mejora aroma y calidad final',
                    'Aplicación desde pre-flora',
                    'Incrementa densidad del fruto',
                ],
                'badge'                => 'premium',
                'order'               => 5,
                'dosage'              => [
                    'ml_per_liter' => 1,
                    'applications' => 'semanal',
                    'timing'       => 'Aplicación semanal desde pre-flora hasta floración',
                ],
                'application_schedule' => ['stage' => 'floracion', 'frequency' => 'semanal'],
            ],
            [
                'slug'        => 'silicio',
                'name'        => 'Silicio',
                'tagline'     => '100% Eco-friendly',
                'short'       => 'Silicio para tu sustrato. Obtenido a partir de materiales reciclados. Envase compostable.',
                'description' => 'Aporte de silicio bioasimilable que fortalece las paredes celulares, mejora la resistencia frente a estrés hídrico y plagas, y refuerza la estructura general de la planta.',
                'features'    => [
                    'Fortalece paredes celulares',
                    'Resistencia a estrés y plagas',
                    'Envase 100% compostable',
                    'Origen reciclado',
                ],
                'badge'                => 'eco',
                'order'               => 6,
                'dosage'              => [
                    'ml_per_liter' => 2,
                    'applications' => 4,
                    'timing'       => '4 aplicaciones semanales desde inicio de vegetativo',
                ],
                'application_schedule' => ['stage' => 'vegetativo', 'frequency' => 'semanal'],
            ],
            [
                'slug'        => 'zym',
                'name'        => 'Tree Mix ZYM',
                'tagline'     => 'Bioestimulante enzimático',
                'short'       => 'Acelera la actividad biológica y crecimiento. Enzimas recuperadoras de suelo.',
                'description' => 'Complejo enzimático premium que reactiva la microbiología del sustrato, descompone restos radiculares y libera nutrientes inmovilizados. Ideal para reutilizar sustratos en múltiples ciclos.',
                'features'    => [
                    'Reactiva microbiología',
                    'Recupera sustratos usados',
                    'Libera nutrientes inmovilizados',
                    'Acelera crecimiento',
                ],
                'badge'                => 'premium',
                'order'               => 7,
                'dosage'              => [
                    'ml_per_liter' => 1,
                    'applications' => 'gradual',
                    'timing'       => 'Dosis creciente: 1 ml/L veg / 2 ml/L pre-flora / 3 ml/L flora',
                ],
                'application_schedule' => ['stage' => 'vegetativo', 'frequency' => 'semanal'],
                'dosage_by_stage'      => [
                    'vegetativo' => 1,
                    'pre-flora'  => 2,
                    'floracion'  => 3,
                ],
            ],
            [
                'slug'        => 'tree-mix-f',
                'name'        => 'Tree Mix F',
                'tagline'     => 'Booster de floración',
                'short'       => 'Estimulante del sistema inmune. Aumenta peso y densidad de los frutos.',
                'description' => 'Formulación de floración con fitohormonas naturales que incrementa el peso seco, la densidad y la calidad organoléptica del producto final. Fortalece la respuesta inmune en la etapa más crítica.',
                'features'    => [
                    'Aumenta peso seco',
                    'Mayor densidad floral',
                    'Refuerzo inmunológico',
                    'Mejora cualidades finales',
                ],
                'badge'                => 'floracion',
                'order'               => 8,
                'dosage'              => [
                    'ml_per_liter' => 2,
                    'applications' => 3,
                    'timing'       => '3 aplicaciones semanales en floración',
                ],
                'application_schedule' => ['stage' => 'floracion', 'frequency' => 'semanal'],
            ],
            [
                'slug'        => 'candy-shock',
                'name'        => 'Shock de Carbohidratos',
                'tagline'     => 'Reemplazo de melazas',
                'short'       => 'Mejora sabor, aroma y vigor. Aumenta rendimiento y peso. 100% orgánico.',
                'description' => 'Mezcla de carbohidratos complejos, macro y microelementos que potencia el metabolismo secundario de la planta. Reemplaza el uso de melazas tradicionales con un perfil mucho más limpio.',
                'features'    => [
                    'Carbohidratos complejos',
                    'Mejora sabor y aroma',
                    'Sin melazas',
                    'Aumenta rendimiento',
                ],
                'badge'                => 'organico',
                'order'               => 9,
                'dosage'              => [
                    'ml_per_liter' => 3,
                    'applications' => 4,
                    'timing'       => '4 aplicaciones semanales en etapa de engorde',
                ],
                'application_schedule' => ['stage' => 'engorde', 'frequency' => 'semanal'],
            ],
            [
                'slug'        => 'biodrop',
                'name'        => 'Tree Mix BioDrop',
                'tagline'     => 'Edición limitada',
                'short'       => 'Tecnología aglutinante de agua y minerales. Reduce el consumo de agua y nutrientes.',
                'description' => 'Polímero biológico que retiene agua y nutrientes en el sustrato, liberándolos según demanda de la planta. Reduce el uso de agua hasta un 40% y optimiza la absorción de minerales.',
                'features'    => [
                    'Reducción de consumo de agua',
                    'Liberación controlada de nutrientes',
                    'Mayor retención en sustrato',
                    'Ideal para climas secos',
                ],
                'badge'                => 'limitado',
                'order'               => 10,
                'dosage'              => [
                    'ml_per_liter' => 0.100,
                    'applications' => 1,
                    'timing'       => 'Aplicación puntual en trasplante según tipo de uso',
                ],
                'application_schedule' => ['stage' => 'trasplante', 'frequency' => 'puntual'],
                'biodrop'              => true,
                'dosage_by_use'        => [
                    'plantin' => 0.025,
                    'tree'    => 0.100,
                    'soil'    => 0.800,
                ],
            ],
            [
                'slug'        => 'kill-mix',
                'name'        => 'Kill Mix',
                'tagline'     => 'Bioinsecticida de contacto',
                'short'       => 'Control biológico de plagas por contacto. 100% orgánico.',
                'description' => 'Biopesticida formulado con extractos vegetales y microorganismos benéficos. Acción inmediata por contacto, sin residuos químicos ni riesgo para polinizadores beneficiosos cuando se aplica correctamente.',
                'features'    => [
                    'Acción por contacto inmediata',
                    'Cero residuos químicos',
                    'Compatible con orgánico',
                    'Espectro amplio',
                ],
                'badge'                => 'organico',
                'order'               => 11,
                'dosage'              => [
                    'ml_per_liter' => 2,
                    'applications' => 'preventivo',
                    'timing'       => 'Preventivo semanal o ante presencia de plaga',
                ],
                'application_schedule' => ['stage' => 'todo el ciclo', 'frequency' => 'a demanda'],
            ],
            [
                'slug'        => 'kill-bti',
                'name'        => 'Kill BTI',
                'tagline'     => 'Control de sciáridos',
                'short'       => 'Bacillus thuringiensis israelensis. Control biológico de sciáridos y mosquitos de hongos.',
                'description' => 'Formulado a base de Bacillus thuringiensis israelensis (BTI), cepa específica para el control larval de sciáridos (fungus gnats). Actúa en el sustrato sin afectar la microbiota beneficiosa ni los polinizadores.',
                'features'    => [
                    'Cepa BTI específica para sciáridos',
                    'Actúa a nivel larval en el sustrato',
                    'No afecta microbiota beneficiosa',
                    'Apto para uso orgánico',
                ],
                'badge'                => 'organico',
                'order'               => 12,
                'dosage'              => [
                    'ml_per_liter' => 2,
                    'applications' => 'segun-necesidad',
                    'timing'       => 'Según necesidad ante presencia de sciáridos',
                ],
                'application_schedule' => ['stage' => 'todo el ciclo', 'frequency' => 'a demanda'],
            ],
            [
                'slug'        => 'kit-completo',
                'name'        => 'Kit Treemix Profesional',
                'tagline'     => 'La línea completa',
                'short'       => 'Kit con 5 productos premium: PRO, N, A, F y CANDY. Todo el ciclo cubierto.',
                'description' => 'El kit profesional reúne la línea completa en formato 45 ml. Pensado para cultivadores que buscan resultados consistentes, ciclo tras ciclo, con la fórmula exacta para cada etapa.',
                'features'    => [
                    'PRO: estimula y protege',
                    'N: complemento vegetativo',
                    'A: calidad y producción',
                    'F: booster de floración',
                    'CANDY: nutrición final',
                ],
                'badge'                => 'kit',
                'order'               => 13,
                'dosage'              => [
                    'ml_per_liter' => 2,
                    'applications' => 4,
                    'timing'       => 'Semanal según etapa; seguir indicaciones de cada producto',
                ],
                'application_schedule' => ['stage' => 'todo el ciclo', 'frequency' => 'semanal'],
            ],
        ];
    }

    public static function find(string $slug): ?array
    {
        foreach (self::all() as $product) {
            if ($product['slug'] === $slug) {
                return $product;
            }
        }
        return null;
    }
}
