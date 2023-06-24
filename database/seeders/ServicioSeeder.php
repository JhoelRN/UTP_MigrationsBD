<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class ServicioSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        array_map(function ($servicio, $detalles, $minutos, $precio) {
            DB::table('servicio')->insert([
                'unique_id' => Str::uuid(),
                'descripcion' => $servicio,
                'detalles' => $detalles,
                'minutos' => $minutos,
                'precio' => $precio,
                'estado' => 'activo',
                // 'created_at' => now(),
                // 'updated_at' => now(),
                'categoria_id' => 1,
            ]);
        },[
            'Sauna, Ducha Vichy, Masaje Royal Relax, 1 Té de la Fidelia',
            'Sauna, Exfoliación, Vichy, Masaje Ritual Relax',
            'Jacuzzi, Masaje',
        ],[
            'La ducha Vichy es un tratamiento hidroterapeutico que consistente en la aplicación de múltiples duchas que actúan simultáneamente desde los pies a la cabeza con distintas finalidades según se varíen la presión y temperatura.',
            'Por el clima seco de nuestra ciudad, la piel se pone áspera, y no es suficiente una crema hidratante diaria. Es necesario abrir los poros, eliminar las células muestras y adicionarle nutrientes a nuestra piel, para que quede sedosa, fresca, homogénea y brillante. Durante este proceso sentirás diferentes texturas sobre tu piel que te conducirán a la relajación total.',
            'Sumerja su cuerpo en un celestial jacuzzi con sales minerales que le ayudará a mejorar la circulación, y acompañe esta sensación con masaje relajante en todo tu cuerpo, dedo por dedo. Puedes reducir la tensión muscular y disfrutar de experiencias que marquen tus sentidos.',
        ],[
            120,
            120,
            120,
        ],[
            184,
            180,
            186,
        ]);

        array_map(function ($servicio, $detalles, $minutos, $precio) {
            DB::table('servicio')->insert([
                'unique_id' => Str::uuid(),
                'descripcion' => $servicio,
                'detalles' => $detalles,
                'minutos' => $minutos,
                'precio' => $precio,
                'estado' => 'activo',
                'created_at' => now(),
                'updated_at' => now(),
                'categoria_id' => 2,
            ]);
        },[
            'Envolturas Hidratantes de Miel',
            'Chocoterapia',
            'Exfoliación con Sales del Mar Muerto',
            'Fango Remineralizante',
        ],[
            'El primer paso es aplicar una exfoliación para eliminar el tejido muerto y las toxinas, a la vez que se estimulan los poros y se los vuelve más sensibles para absorber las propiedades de este tratamiento, aplicamos el fruto natural a cubrimos el cuerpo entero, con el fin de estimular la vasodilatación y el metabolismo, e introducir en el organismo los agentes naturales, para lo cual se deja que haga efecto durante unos 40 minutos. Luego la envoltura se retira, se limpia el cuerpo y se complementa todo el tratamiento con un masaje corporal.',
            'Reconforta, acaba con la tensión, la falta de vitalidad, el cansancio y todos los síntomas del estrés. Combate la celulitis, adiposidad localizada y sobrepeso, inhibiendo la enzima responsable del proceso de formación de grasa. Además, deja la piel suave y dulcemente perfumada.',
            'Peeling natural de barros y sales del mar muerto con proteínas de seda. Suaviza piel de naranja, estrías, gracias a la sinergia creada por el barro y las proteínas de seda, dejan la piel hidratada. (Productos: MASSADA)',
            'Fango remineralizaste hidratante que contiene Liposilt Black y Liposilt Green, ambos son un limo bioactivo de origen natural, rico en componentes orgánicos, ideal para nutrir e hidratar la piel. Cada uno tiene propiedades únicas derivadas de sus métodos de formación, sin embargo, ambos tipos de Liposilt contienen más del 90% de materia orgánica. El Liposilt® Black aumenta la humedad, El Liposilt Green aumenta la renovación celular, unifica el tono y mejora las características de la piel.',
        ],[
            120,
            60,
            120,
            120,
        ],[
            194,
            194,
            194,
            185,
        ]);

        array_map(function ($servicio, $detalles, $minutos, $precio) {
            DB::table('servicio')->insert([
                'unique_id' => Str::uuid(),
                'descripcion' => $servicio,
                'detalles' => $detalles,
                'minutos' => $minutos,
                'precio' => $precio,
                'estado' => 'activo',
                'created_at' => now(),
                'updated_at' => now(),
                'categoria_id' => 3,
            ]);
        },[
            'Ritual Relax',
            'Ritual con Piedras Volcánicas',
            'Masaje Royal Reductor',
        ],[
            'Elimina tensiones y reafirma los músculos y las articulaciones, devolviendo al cuerpo su energía y equilibrio natural. Se aplican técnicas de deslizamiento, amasamiento, vibración, percusión y fricción, con las que consigue relajar el cuerpo y la mente. Los movimientos lentos y suaves eliminan el estrés y mejoran la circulación aliviando el dolor corporal.',
            'El masaje con piedras volcánicas trabaja sobre el dolor de los músculos y estimula una sensación de relajación general. Las piedras calientes ejercen sobre el cuerpo un alivio que facilita que fluya la energía vital. Las piedras calientes se colocan por unos minutos en todos los puntos del chakra de nuestro cuerpo, por todo lo largo de nuestra columna para que el calor pueda llegar a estos puntos y brindarnos una mayor relajación, gracias a la estimulación de los chakras.',
            'Este tratamiento es ideal para deshacerse de la grasa localizada no deseada. Se realiza con una presión fuerte y una velocidad más rápida a la usual.',

        ],[
            60,
            60,
            40,
        ],[
            180,
            120,
            70,
        ]);

    }
}
