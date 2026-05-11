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
                'slug' => 'biok-nn',
                'name' => 'Tree Mix BioK-NN',
                'tagline' => 'Producto exclusivo',
                'short' => 'Aumenta cannabinoides. Aporta nitrógeno atmosférico. Optimiza el rendimiento en etapas vegetativas y de floración.',
                'description' => 'Tecnología de fijación biológica de nitrógeno atmosférico desarrollada en laboratorio. BioK-NN incrementa significativamente los niveles de cannabinoides y mejora el desempeño del cultivo en todas las etapas críticas.',
                'features' => [
                    'Fijación biológica de nitrógeno',
                    'Aumento medible de cannabinoides',
                    'Compatible con cultivos orgánicos',
                    'Apto vegetativo y floración',
                ],
                'badge' => 'exclusivo',
                'order' => 1,
            ],
            [
                'slug' => 'biodrop',
                'name' => 'Tree Mix BioDrop',
                'tagline' => 'Edición limitada',
                'short' => 'Tecnología aglutinante de agua y minerales. Reduce el consumo de agua y nutrientes.',
                'description' => 'Polímero biológico que retiene agua y nutrientes en el sustrato, liberándolos según demanda de la planta. Reduce el uso de agua hasta un 40% y optimiza la absorción de minerales.',
                'features' => [
                    'Reducción de consumo de agua',
                    'Liberación controlada de nutrientes',
                    'Mayor retención en sustrato',
                    'Ideal para climas secos',
                ],
                'badge' => 'limitado',
                'order' => 2,
            ],
            [
                'slug' => 'silicio',
                'name' => 'Silicio',
                'tagline' => '100% Eco-friendly',
                'short' => 'Silicio para tu sustrato. Obtenido a partir de materiales reciclados. Envase compostable.',
                'description' => 'Aporte de silicio bioasimilable que fortalece las paredes celulares, mejora la resistencia frente a estrés hídrico y plagas, y refuerza la estructura general de la planta.',
                'features' => [
                    'Fortalece paredes celulares',
                    'Resistencia a estrés y plagas',
                    'Envase 100% compostable',
                    'Origen reciclado',
                ],
                'badge' => 'eco',
                'order' => 3,
            ],
            [
                'slug' => 'kill-mix',
                'name' => 'Kill Mix',
                'tagline' => 'Bioinsecticida de contacto',
                'short' => 'Control biológico de plagas por contacto. 100% orgánico.',
                'description' => 'Biopesticida formulado con extractos vegetales y microorganismos benéficos. Acción inmediata por contacto, sin residuos químicos ni riesgo para polinizadores beneficiosos cuando se aplica correctamente.',
                'features' => [
                    'Acción por contacto inmediata',
                    'Cero residuos químicos',
                    'Compatible con orgánico',
                    'Espectro amplio',
                ],
                'badge' => 'organico',
                'order' => 4,
            ],
            [
                'slug' => 'zym',
                'name' => 'Tree Mix ZYM',
                'tagline' => 'Bioestimulante enzimático',
                'short' => 'Acelera la actividad biológica y crecimiento. Enzimas recuperadoras de suelo.',
                'description' => 'Complejo enzimático premium que reactiva la microbiología del sustrato, descompone restos radiculares y libera nutrientes inmovilizados. Ideal para reutilizar sustratos en múltiples ciclos.',
                'features' => [
                    'Reactiva microbiología',
                    'Recupera sustratos usados',
                    'Libera nutrientes inmovilizados',
                    'Acelera crecimiento',
                ],
                'badge' => 'premium',
                'order' => 5,
            ],
            [
                'slug' => 'tree-mix-f',
                'name' => 'Tree Mix F',
                'tagline' => 'Booster de floración',
                'short' => 'Estimulante del sistema inmune. Aumenta peso y densidad de los frutos.',
                'description' => 'Formulación de floración con fitohormonas naturales que incrementa el peso seco, la densidad y la calidad organoléptica del producto final. Fortalece la respuesta inmune en la etapa más crítica.',
                'features' => [
                    'Aumenta peso seco',
                    'Mayor densidad floral',
                    'Refuerzo inmunológico',
                    'Mejora cualidades finales',
                ],
                'badge' => 'floracion',
                'order' => 6,
            ],
            [
                'slug' => 'candy-shock',
                'name' => 'Shock de Carbohidratos',
                'tagline' => 'Reemplazo de melazas',
                'short' => 'Mejora sabor, aroma y vigor. Aumenta rendimiento y peso. 100% orgánico.',
                'description' => 'Mezcla de carbohidratos complejos, macro y microelementos que potencia el metabolismo secundario de la planta. Reemplaza el uso de melazas tradicionales con un perfil mucho más limpio.',
                'features' => [
                    'Carbohidratos complejos',
                    'Mejora sabor y aroma',
                    'Sin melazas',
                    'Aumenta rendimiento',
                ],
                'badge' => 'organico',
                'order' => 7,
            ],
            [
                'slug' => 'kit-completo',
                'name' => 'Kit Treemix Profesional',
                'tagline' => 'La línea completa',
                'short' => 'Kit con 5 productos premium: PRO, N, A, F y CANDY. Todo el ciclo cubierto.',
                'description' => 'El kit profesional reúne la línea completa en formato 45 ml. Pensado para cultivadores que buscan resultados consistentes, ciclo tras ciclo, con la fórmula exacta para cada etapa.',
                'features' => [
                    'PRO: estimula y protege',
                    'N: complemento vegetativo',
                    'A: calidad y producción',
                    'F: booster de floración',
                    'CANDY: nutrición final',
                ],
                'badge' => 'kit',
                'order' => 8,
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
