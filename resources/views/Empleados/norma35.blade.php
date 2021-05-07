@extends('adminlte::page')

@section('title', 'Norma 35 STPS')

@section('content_header')
    <h1>
        Norma 35 STPS
    </h1>
@stop
@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-header">
                        <h3 class="card-title">Documentación</h3>
                    </div>
                    <div class="card-body">
                        <div class="p-3 mb-2 bg-dark text-white ">
                            <ul>
                                <li><a class="text-white" href="#objetivo">1. Objetivo</a></li>
                                <li><a class="text-white" href="#aplicacion">2. Campo de aplicación</a></li>
                                <li><a class="text-white" href="#referencias">3. Referencias</a></li>
                                <li><a class="text-white" href="#definiciones">4. Definiciones</a></li>
                                <li><a class="text-white" href="#oPatron">5. Obligaciones del patrón</a></li>
                                <li><a class="text-white" href="#oTrabajador">6. Obligaciones de los trabajadores</a></li>
                                <li><a class="text-white" href="#identificacion">7. Identificación y análisis de los factores de riesgo psicosocial, y
                                        evaluación del entorno organizacional</a></li>
                                <li><a class="text-white" href="#medidas">8. Medidas de prevención y acciones de control de los factores de riesgo
                                        psicosocial, de la violencia laboral, y promoción del entorno organizacional favorable</a></li>
                                <li><a class="text-white" href="#unidades">9. Unidades de verificación</a></li>
                                <li><a class="text-white" href="#procedimiento">10. Procedimiento para la evaluación de la conformidad</a></li>
                                <li><a class="text-white" href="#vigilancia">11. Vigilancia</a></li>
                            </ul>
                        </div>

                        <div class="container">
                            <section id="objetivo">
                                <h6><span class="text-primary">1. Objetivo</span></h6>
                                <p>Establecer los elementos para identificar, analizar y prevenir los factores de riesgo psicosocial, así
                                    como para promover un entorno organizacional favorable en los centros de trabajo.</p>
                            </section>
                            <section id="aplicacion">
                                <h6><span class="text-primary">2. Campo de aplicación</span></h6>
                                <p>La presente Norma Oficial Mexicana rige en todo el territorio nacional y aplica en todos los centros de
                                    trabajo, de acuerdo con lo siguiente:</p>
                                <p>a) Para centros de trabajo en los que laboren hasta quince trabajadores deberán cumplir con lo dispuesto
                                    por los numerales 5.1, 5.4, 5.5, 5.7, 8.1 y 8.2 de la presente Norma;</p>
                                <p>b) Para centros de trabajo en los que laboren entre dieciséis y cincuenta trabajadores deberán cumplir
                                    con los numerales 5.1, 5.2, del 5.4 al 5.8, 7.1, inciso a), 7.2, del 7.4 al 7.9, y el Capítulo 8 de esta
                                    Norma, y</p>
                                <p>c) Para centros de trabajo en los que laboren más de 50 trabajadores deberán cumplir con los numerales
                                    5.1, del 5.3 al 5.8, 7.1, inciso b), del 7.2 al 7.9 y el Capítulo 8 de la presente Norma.</p>
                                <p>Aquellos centros de trabajo que cuenten con Certificado de cumplimiento con la norma mexicana
                                    NMX-R-025-SCFI-2015, vigente, darán por esa condición cumplimiento con las obligaciones y numerales
                                    siguientes: 5.1 inciso b); 8.1, inciso b); 8.2 incisos a), subinciso 2), e) y g); y 5.7 inciso d).</p>
                            </section>
                            <section id="referencias">
                                <h6><span class="text-primary">3. Referencias</span></h6>
                                <p>Para la correcta interpretación y aplicación de la presente Norma se deberán consultar las siguientes
                                    normas oficiales mexicanas y la norma mexicana, vigentes, o las que las sustituyan:</p>
                                <p><span class="text-info">3.1</span> NOM-019-STPS-2011, Constitución, integración, organización y
                                    funcionamiento de las comisiones de seguridad e higiene.</p>
                                <p><span class="text-info">3.2</span> NOM-030-STPS-2009, Servicios preventivos de seguridad y salud en el
                                    trabajo-Funciones y actividades.</p>
                                <p><span class="text-info">3.3</span> NMX-R-025-SCFI-2015, En Igualdad Laboral y No Discriminación.</p>
                            </section>
                            <section id="definiciones">
                                <h6><span class="text-primary">4. Definiciones</span></h6>
                                <p>Para efectos de esta Norma, se consideran las definiciones siguientes:</p>
                                <p><span class="text-info">4.1 Acontecimiento traumático severo:</span> Aquel experimentado durante o con
                                    motivo del trabajo que se caracteriza por la ocurrencia de la muerte o que representa un peligro real
                                    para la integridad física de una o varias personas y que puede generar trastorno de estrés postraumático
                                    para quien lo sufre o lo presencia. Algunos ejemplos son: explosiones, derrumbes, incendios de gran
                                    magnitud; accidentes graves o mortales, asaltos con violencia, secuestros y homicidios, entre otros.</p>
                                <p><span class="text-info">4.2 Apoyo social:</span> Las acciones para mejorar las relaciones sociales en el
                                    trabajo en las que se promueve el apoyo mutuo en la solución de problemas de trabajo entre trabajadores,
                                    superiores y/o subordinados. Algunos ejemplos de medidas para constituir un apoyo social práctico y
                                    oportuno en el lugar de trabajo son: afianzar la relación supervisores-trabajadores; propiciar la ayuda
                                    mutua entre los trabajadores; fomentar las actividades culturales y del deporte, y proporcionar ayuda
                                    directa cuando sea necesario, entre otros.</p>
                                <p><span class="text-info">4.3 Autoridad laboral:</span> Las unidades administrativas competentes de la
                                    Secretaría que realizan funciones de inspección y vigilancia en materia de seguridad y salud en el
                                    trabajo, y las correspondientes de las entidades federativas, que actúen en auxilio de aquéllas.</p>
                                <p><span class="text-info">4.4 Centro de trabajo:</span> El lugar o lugares, tales como edificios, locales,
                                    instalaciones y áreas, donde se realicen actividades de explotación, aprovechamiento, producción,
                                    comercialización, transporte y almacenamiento o prestación de servicios, en los que laboren personas que
                                    estén sujetas a una relación de trabajo.</p>
                                <p><span class="text-info">4.5 Diagnóstico de seguridad y salud en el trabajo:</span> La identificación de
                                    las condiciones inseguras o peligrosas; de los agentes físicos, químicos o biológicos o de los factores
                                    de riesgo ergonómico o psicosocial capaces de modificar las condiciones del ambiente laboral; de los
                                    peligros circundantes al centro de trabajo, así como de los requerimientos normativos en materia de
                                    seguridad y salud en el trabajo que resulten aplicables.</p>
                                <p><span class="text-info">4.6 Entorno Organizacional Favorable:</span> Aquel en el que se promueve el
                                    sentido de pertenencia de los trabajadores a la empresa; la formación para la adecuada realización de
                                    las tareas encomendadas; la definición precisa de responsabilidades para los trabajadores del centro de
                                    trabajo; la participación proactiva y comunicación entre trabajadores; la distribución adecuada de
                                    cargas de trabajo, con jornadas de trabajo regulares conforme a la Ley Federal del Trabajo, y la
                                    evaluación y el reconocimiento del desempeño.</p>
                                <p><span class="text-info">4.7 Factores de Riesgo Psicosocial:</span> Aquellos que pueden provocar
                                    trastornos de ansiedad, no orgánicos del ciclo sueño-vigilia y de estrés grave y de adaptación, derivado
                                    de la naturaleza de las funciones del puesto de trabajo, el tipo de jornada de trabajo y la exposición a
                                    acontecimientos traumáticos severos o a actos de violencia laboral al trabajador, por el trabajo
                                    desarrollado.</p>
                                <p>Comprenden las condiciones peligrosas e inseguras en el ambiente de trabajo;</span> las cargas de trabajo
                                    cuando exceden la capacidad del trabajador; la falta de control sobre el trabajo (posibilidad de influir
                                    en la organización y desarrollo del trabajo cuando el proceso lo permite); las jornadas de trabajo
                                    superiores a las previstas en la Ley Federal del Trabajo, rotación de turnos que incluyan turno nocturno
                                    y turno nocturno sin períodos de recuperación y descanso; interferencia en la relación trabajo-familia,
                                    y el liderazgo negativo y las relaciones negativas en el trabajo.</p>
                                <p><span class="text-info">4.8 Medidas de prevención y acciones de control:</span> Aquellas acciones que se
                                    adoptan para prevenir y/o mitigar a los factores de riesgo psicosocial y, en su caso, para eliminar las
                                    prácticas opuestas al entorno organizacional favorable y los actos de violencia laboral, así como las
                                    acciones implementadas para darles seguimiento.</p>
                                <p><span class="text-info">4.9 Política de prevención de riesgos psicosociales:</span> La declaración de
                                    principios y compromisos que establece el patrón para prevenir los factores de riesgo psicosocial y la
                                    violencia laboral, y para la promoción de un entorno organizacional favorable, con el objeto de
                                    desarrollar una cultura en la que se procure el trabajo digno o decente, y la mejora continua de las
                                    condiciones de trabajo.</p>
                                <p><span class="text-info">4.10 Trabajador:</span> La persona física que presta a otra, física o moral, un
                                    trabajo personal subordinado.</p>
                                <p><span class="text-info">4.11 Trabajo:</span> Toda actividad humana, intelectual o material,
                                    independientemente del grado de preparación técnica requerido por cada profesión u oficio.</p>
                                <p><span class="text-info">4.12 Violencia laboral:</span> Aquellos actos de hostigamiento, acoso o malos
                                    tratos en contra del trabajador, que pueden dañar su integridad o salud.</p>
                            </section>
                            <section id="oPatron">
                                <h6><span class="text-primary">5. Obligaciones del patrón</span></h6>
                                <p><span class="text-info">5.1 Establecer por escrito, implantar, mantener y difundir en el centro de trabajo una política de prevención de riesgos psicosociales que contemple:</span>
                                </p>
                                <p>a) La prevención de los factores de riesgo psicosocial;</p>
                                <p>b) La prevención de la violencia laboral, y</p>
                                <p>c) La promoción de un entorno organizacional favorable.</p>
                                <p>Ver <a href="guiaref4" class="badge badge-success">Guía de Referencia IV</a>, en donde se da un ejemplo
                                    de la política de prevención de riesgos psicosociales.</p>
                                <p><span class="text-info">5.2</span> Identificar y analizar los factores de riesgo psicosocial, de acuerdo
                                    con lo establecido en los numerales 7.1, inciso a), y 7.2, de esta Norma, tratándose de centros de
                                    trabajo que tengan entre 16 y 50 trabajadores.</p>
                                <p><span class="text-info">5.3</span> Identificar y analizar los factores de riesgo psicosocial y evaluar el
                                    entorno organizacional, de conformidad con lo señalado en los numerales 7.1, inciso b), 7.2 y 7.3,
                                    respectivamente, de la presente Norma, tratándose de centros de trabajo que tengan más de 50
                                    trabajadores.</p>
                                <p><span class="text-info">5.4</span> Adoptar las medidas para prevenir y controlar los factores de riesgo
                                    psicosocial, promover el entorno organizacional favorable, así como para atender las prácticas opuestas
                                    al entorno organizacional favorable y los actos de violencia laboral, con base en lo dispuesto por el
                                    Capítulo 8 de la presente Norma.</p>
                                <p><span class="text-info">5.5</span> Identificar a los trabajadores que fueron sujetos a acontecimientos
                                    traumáticos severos durante o con motivo del trabajo y, canalizarlos para su atención a la institución
                                    de seguridad social o privada, o al médico del centro de trabajo o de la empresa. <a href="guiaref1"
                                                                                                                         class="badge badge-success">Ver
                                        Guía de referencia I.</a></p>
                                <p><span class="text-info">5.6</span> Practicar exámenes médicos y evaluaciones psicológicas a los
                                    trabajadores expuestos a violencia laboral y/o a los factores de riesgo psicosocial, cuando existan
                                    signos o síntomas que denoten alguna alteración a su salud y el resultado de la identificación y
                                    análisis de los factores de riesgo psicosocial, a que se refiere el numeral 7.1 y 7.2 de esta Norma, así
                                    lo sugiera y/o existan quejas de violencia laboral mediante los mecanismos a que alude el numeral 8.1,
                                    inciso b) de la presente Norma.</p>
                                <p>Los exámenes médicos y evaluaciones psicológicas podrán efectuarse a través de la institución de
                                    seguridad social o privada, médico, psiquiatra o psicólogo del centro de trabajo, según corresponda, y
                                    deberán efectuarse de conformidad con lo establecido por las normas oficiales mexicanas que al respecto
                                    emitan la Secretaría de Salud y/o la Secretaría del Trabajo y Previsión Social, y a falta de éstas, los
                                    que indique la institución de seguridad social o privada, o el médico del centro de trabajo, que le
                                    preste el servicio médico.</p>
                                <p><span class="text-info">5.7</span> Difundir y proporcionar información a los trabajadores sobre:</p>
                                <p>a) La política de prevención de riesgos psicosociales;</p>
                                <p>b) Las medidas adoptadas para combatir las prácticas opuestas al entorno organizacional favorable y los
                                    actos de violencia laboral;</p>
                                <p>c) Las medidas y acciones de prevención y, en su caso, las acciones de control de los factores de riesgo
                                    psicosocial;</p>
                                <p>d) Los mecanismos para presentar quejas por prácticas opuestas al entorno organizacional favorable y para
                                    denunciar actos de violencia laboral;</p>
                                <p>e) Los resultados de la identificación y análisis de los factores de riesgo psicosocial para los centros
                                    de trabajo que tengan entre 16 y 50 trabajadores, y de la identificación y análisis de los factores de
                                    riesgo psicosocial y la evaluación del entorno organizacional tratándose de centros de trabajo de más de
                                    50 trabajadores, y</p>
                                <p>f) Las posibles alteraciones a la salud por la exposición a los factores de riesgo psicosocial.</p>
                                <p><span class="text-info">5.8</span> Llevar los registros sobre:</p>
                                <p>a) Los resultados de la identificación y análisis de los factores de riesgo psicosocial y, además,
                                    tratándose de centros de trabajo de más de 50 trabajadores, de las evaluaciones del entorno
                                    organizacional;</p>
                                <p>b) Las medidas de control adoptadas cuando el resultado de la identificación y análisis de los factores
                                    de riesgo psicosocial y evaluación del entorno organizacional lo señale, y</p>
                                <p>c) Los nombres de los trabajadores a los que se les practicaron los exámenes o evaluaciones clínicas y
                                    que se comprobó la exposición a factores de riesgo psicosocial, a actos de violencia laboral o
                                    acontecimientos traumáticos severos.</p>
                            </section>
                            <section id="oTrabajador">
                                <p><span class="text-primary">6. Obligaciones de los trabajadores</span></p>
                                <p><span class="text-info">6.1</span> Observar las medidas de prevención y, en su caso, de control que
                                    dispone
                                    esta Norma, así como las que establezca el patrón para: controlar los factores de riesgo psicosocial,
                                    colaborar para contar con un entorno organizacional favorable y prevenir actos de violencia laboral.</p>
                                <p><span class="text-info">6.2</span> Abstenerse de realizar prácticas contrarias al entorno organizacional
                                    favorable y actos de violencia laboral.</p>
                                <p><span class="text-info">6.3</span> Participar en la identificación de los factores de riesgo psicosocial
                                    y,
                                    en su caso, en la evaluación del entorno organizacional.</p>
                                <p><span class="text-info">6.4</span> Informar sobre prácticas opuestas al entorno organizacional favorable
                                    y
                                    denunciar actos de violencia laboral, utilizando los mecanismos que establezca el patrón para tal efecto
                                    y/o
                                    a través de la comisión de seguridad e higiene, a que se refiere la NOM-019-STPS-2011, o las que la
                                    sustituyan.</p>
                                <p><span class="text-info">6.5</span> Informar por escrito al patrón directamente, a través de los servicios
                                    preventivos de seguridad y salud en el trabajo o de la comisión de seguridad e higiene; haber
                                    presenciado o
                                    sufrido un acontecimiento traumático severo. El escrito deberá contener al menos: la fecha de
                                    elaboración;
                                    el nombre del trabajador que elabora el escrito; en su caso, el nombre de los trabajadores involucrados;
                                    la
                                    fecha de ocurrencia, y la descripción del(los) acontecimiento(s).</p>
                                <p><span class="text-info">6.6</span> Participar en los eventos de información que proporcione el patrón.
                                </p>
                                <p><span class="text-info">6.7</span> Someterse a los exámenes médicos y evaluaciones psicológicas que
                                    determinan la presente Norma y/o las normas oficiales mexicanas que al respecto emitan la Secretaría de
                                    Salud y/o la Secretaría del Trabajo y Previsión Social, y a falta de éstas, los que indique la
                                    institución
                                    de seguridad social o privada, o el médico o psicólogo o psiquiatra del centro de trabajo o de la
                                    empresa.
                                </p>
                            </section>
                            <section id="identificacion">
                                <p><span class="text-primary">7. Identificación y análisis de los factores de riesgo psicosocial, y evaluación del entorno organizacional</span>
                                </p>
                                <p><span class="text-info">7.1 La identificación y análisis de los factores de riesgo psicosocial y la evaluación del entorno organizacional deberán realizarse de conformidad con lo siguiente:</span>
                                </p>
                                <p>a) Los centros de trabajo que tengan entre 16 y 50 trabajadores, únicamente deberán realizar la
                                    identificación y análisis de los factores de riesgo psicosocial, incluyendo a todos los trabajadores <a
                                        href="guiaref2" class="badge badge-success">ver Guía de referencia II</a> y</p>
                                <p>b) Los centros de trabajo que tengan más de 50 trabajadores, deberán realizar la identificación y
                                    análisis de
                                    los factores de riesgo psicosocial y la evaluación del entorno organizacional, éstas se podrán realizar
                                    con
                                    una muestra representativa conforme a lo señalado en la Guía de referencia III, en el numeral III.1.
                                <p><span class="text-info">7.2 La identificación y análisis de los factores de riesgo psicosocial deberá contemplar lo siguiente:</span>
                                </p>
                                <p>a) Las condiciones en el ambiente de trabajo. Se refieren a condiciones peligrosas e inseguras o
                                    deficientes
                                    e insalubres; es decir, a las condiciones del lugar de trabajo, que bajo ciertas circunstancias exigen
                                    del
                                    trabajador un esfuerzo adicional de adaptación;</p>
                                <p>b) Las cargas de trabajo. Se refieren a las exigencias que el trabajo impone al trabajador y que exceden
                                    su
                                    capacidad, pueden ser de diversa naturaleza, como cuantitativas, cognitivas o mentales, emocionales, de
                                    responsabilidad, así como cargas contradictorias o inconsistentes;</p>
                                <p>c) La falta de control sobre el trabajo. El control sobre el trabajo es la posibilidad que tiene el
                                    trabajador para influir y tomar decisiones en la realización de sus actividades. La iniciativa y
                                    autonomía,
                                    el uso y desarrollo de habilidades y conocimientos, la participación y manejo del cambio, así como la
                                    capacitación son aspectos que dan al trabajador la posibilidad de influir sobre su trabajo. Estos
                                    elementos,
                                    cuando son inexistentes o escasos, se convierten en un factor de riesgo.</p>
                                <p>La falta de control se denomina como la escasa o inexistente posibilidad que tiene el trabajador para
                                    influir
                                    y tomar decisiones sobre los diversos aspectos que intervienen en la realización de sus actividades.
                                    Contrario a esto, la iniciativa y autonomía, el uso y desarrollo de habilidades y conocimientos, la
                                    participación y el manejo del cambio y la capacitación son elementos que dan al trabajador la
                                    posibilidad de
                                    influir sobre su trabajo.</p>
                                <p>Este factor de riesgo sólo aplica en aquellos procesos y/o actividades en los que se requiere toma de
                                    decisiones y el trabajador cuenta con conocimientos y experiencia necesaria para tal efecto;</p>
                                <p>d) Las jornadas de trabajo y rotación de turnos que exceden lo establecido en la Ley Federal del Trabajo.
                                    Representan una exigencia de tiempo laboral que se hace al trabajador en términos de la duración y el
                                    horario de la jornada, se convierte en factor de riesgo psicosocial cuando se trabaja con extensas
                                    jornadas,
                                    con frecuente rotación de turnos o turnos nocturnos, sin pausas y descansos periódicos claramente
                                    establecidos y ni medidas de prevención y protección del trabajador para detectar afectación de su
                                    salud, de
                                    manera temprana;</p>
                                <p>e) Interferencia en la relación trabajo-familia. Surge cuando existe conflicto entre las actividades
                                    familiares o personales y las responsabilidades laborales; es decir, cuando de manera constante se
                                    tienen
                                    que atender responsabilidades laborales durante el tiempo dedicado a la vida familiar y personal, o se
                                    tiene
                                    que laborar fuera del horario de trabajo;</p>
                                <p>f) Liderazgo negativo y relaciones negativas en el trabajo:</p>
                                <p>1) El liderazgo negativo en el trabajo hace referencia al tipo de relación que se establece entre el
                                    patrón
                                    o, sus representantes y los trabajadores, cuyas características influyen en la forma de trabajar y en
                                    las
                                    relaciones de un área de trabajo y que está directamente relacionado con la actitud agresiva y/o
                                    impositiva;
                                    falta de claridad de las funciones en las actividades, y escaso o nulo reconocimiento y
                                    retroalimentación
                                    del desempeño, y</p>
                                <p>2) El concepto de relaciones negativas en el trabajo se refiere a la interacción que se establece en el
                                    contexto laboral y abarca aspectos como la imposibilidad de interactuar con los compañeros de trabajo
                                    para
                                    la solución de problemas relacionados con el trabajo, y características desfavorables de estas
                                    interacciones
                                    en aspectos funcionales como deficiente o nulo trabajo en equipo y apoyo social, y</p>
                                <p>g) La violencia laboral, de conformidad con lo siguiente:</p>
                                <p>1) Acoso, acoso psicológico: Aquellos actos que dañan la estabilidad psicológica, la personalidad, la
                                    dignidad o integridad del trabajador. Consiste en acciones de intimidación sistemática y persistente,
                                    tales
                                    como: descrédito, insultos, humillaciones, devaluación, marginación, indiferencia, comparaciones
                                    destructivas, rechazo, restricción a la autodeterminación y amenazas, las cuales llevan al trabajador a
                                    la
                                    depresión, al aislamiento, a la pérdida de su autoestima. Para efectos de esta Norma no se considera el
                                    acoso sexual;</p>
                                <p>2) Hostigamiento: El ejercicio de poder en una relación de subordinación real de la víctima frente al
                                    agresor
                                    en el ámbito laboral, que se expresa en conductas verbales, físicas o ambas, y</p>
                                <p>3) Malos tratos: Aquellos actos consistentes en insultos, burlas, humillaciones y/o ridiculizaciones del
                                    trabajador, realizados de manera continua y persistente (más de una vez y/o en diferentes
                                    ocasiones).</p>
                                <p><span class="text-info">7.3 La evaluación del entorno organizacional favorable deberá comprender:</span>
                                </p>
                                <p>a) El sentido de pertenencia de los trabajadores a la empresa;</p>
                                <p>b) La formación para la adecuada realización de las tareas encomendadas;</p>
                                <p>c) La definición precisa de responsabilidades para los trabajadores;</p>
                                <p>d) La participación proactiva y comunicación entre el patrón, sus representantes y los trabajadores;</p>
                                <p>e) La distribución adecuada de cargas de trabajo, con jornadas laborales regulares, y</p>
                                <p>f) La evaluación y el reconocimiento del desempeño.</p>
                                <p><span class="text-info">7.4 Los centros de trabajo podrán utilizar para identificar y analizar los factores de riesgo psicosocial y evaluar el entorno organizacional, cualquier método que contemple lo siguiente:</span>
                                </p>
                                <p>a) La aplicación de cuestionarios que cumplan con lo dispuesto por los numerales 7.2 y/o 7.3, según
                                    corresponda, y 7.5 de la presente Norma;</p>
                                <p>b) La forma como se deberá realizar la aplicación de los cuestionarios;</p>
                                <p>c) La manera de evaluar los cuestionarios, y</p>
                                <p>d) Los niveles de riesgo y la forma de determinarlos conforme a los resultados de los cuestionarios.</p>
                                <p><a href="guiaref2" class="badge badge-success">Ver Guía de referencia II</a> o <a href="guiaref3"
                                                                                                                     class="badge badge-success">Ver
                                        Guía de referencia III</a></p>
                                <p><span class="text-info">7.5 Los cuestionarios que desarrolle el centro de trabajo para la identificación y análisis de los factores de riesgo psicosocial y la evaluación del entorno organizacional, en caso de no utilizar los establecidos en las Guías de referencia II y III de esta Norma, deberán estar validados conforme a lo siguiente:</span>
                                </p>
                                <p>a) La validación deberá realizarse en trabajadores cuyos centros de trabajo se ubiquen en el territorio
                                    nacional;</p>
                                <p>b) El número de individuos que se utilizó para realizar la validación deberá ser mayor o igual a 10 veces
                                    por
                                    cada reactivo contemplado inicialmente;</p>
                                <p>c) Tener medidas de consistencia interna con los coeficientes siguientes:</p>
                                <p>1) De confiabilidad (alfa de Cronbach) superiores a 0.7, y</p>
                                <p>2) De correlación (Pearson o Spearman), con r mayor a 0.5, y significancia menor o igual a 0.05;</p>
                                <p>d) Tener validez de constructo mediante análisis factorial confirmatorio cumpliendo con medidas e índices
                                    de
                                    ajuste siguientes:</p>
                                <p>1) De ajuste absoluto con los índices:</p>
                                <p>I.- Índice de Bondad de Ajuste, GFI (Goodness of Fit Index), mayor a 0.90;</p>
                                <p>II.- Residuo cuadrático medio, RMSR (Root Mean Square Residual), cercana a 0 y máximo 0.08, o</p>
                                <p>III.- Error de aproximación cuadrático medio, RMSEA (Root Mean Square Error of Approximation), menor a
                                    0.08;</p>
                                <p>2) De ajuste incremental o relativo con el índice de ajuste normado, NFI (Normed Fit Index), mayor a
                                    0.90,
                                    y</p>
                                <p>3) De parsimonia con el índice Ji cuadrada normada: X2/gl menor o igual a 5, y</p>
                                <p>e) Se apliquen en población trabajadora de características semejantes a la población trabajadora en que
                                    se
                                    validó.</p>
                                <p><span class="text-info">7.6 La identificación y análisis de los factores de riesgo psicosocial y la evaluación del entorno organizacional deberá integrarse al diagnóstico de seguridad y salud en el trabajo a que se refiere la  NOM-030-STPS-2009, vigente o las que la sustituyan.</span>
                                </p>
                                <p><span class="text-info">7.7 El resultado de la identificación y análisis de los factores de riesgo psicosocial y la evaluación del entorno organizacional deberá constar en un informe que contenga lo siguiente:</span>
                                </p>
                                <p>a) Datos del centro de trabajo verificado:</p>
                                <p>1) Nombre, denominación o razón social;</p>
                                <p>2) Domicilio;</p>
                                <p>3) Actividad principal;</p>
                                <p>b) Objetivo;</p>
                                <p>c) Principales actividades realizadas en el centro de trabajo;</p>
                                <p>d) Método utilizado conforme al numeral 7.4, de la presente Norma;</p>
                                <p>e) Resultados obtenidos de acuerdo con el numeral 7.4, inciso d) de esta Norma,</p>
                                <p>f) Conclusiones;</p>
                                <p>g) Recomendaciones y acciones de intervención, en su caso, y</p>
                                <p>h) Datos del responsable de la evaluación;</p>
                                <p>1) Nombre completo, y</p>
                                <p>2) Número de cédula profesional, en su caso.</p>
                                <p><span class="text-info">7.8 El resultado de la identificación y análisis de los factores de riesgo psicosocial y la evaluación del entorno organizacional deberá estar disponible para consulta de los trabajadores.</span>
                                </p>
                                <p><span class="text-info">7.9 La identificación y análisis de los factores de riesgo psicosocial y la evaluación del entorno organizacional deberá realizarse, al menos, cada dos años.</span>
                                </p>
                            </section>
                            <section id="medidas">
                                <p><span class="text-primary">8. Medidas de prevención y acciones de control de los factores de riesgo psicosocial, de la violencia laboral, y promoción del entorno organizacional favorable</span>
                                </p>
                                <p><span class="text-info">8.1 Para la prevención de los factores de riesgo psicosocial y la violencia laboral, así como para la promoción del entorno organizacional favorable, los centros de trabajo deberán:</span>
                                </p>
                                <p>a) Establecer acciones para la prevención de los factores de riesgo psicosocial que impulsen: el apoyo
                                    social, la difusión de la información y la capacitación;
                                <p>b) Disponer de mecanismos seguros y confidenciales para la recepción de quejas por prácticas opuestas al
                                    entorno organizacional favorable y para denunciar actos de violencia laboral, y
                                <p>c) Realizar acciones que promuevan el sentido de pertenencia de los trabajadores a la organización; la
                                    capacitación para la adecuada realización de las tareas encomendadas; la definición precisa de
                                    responsabilidades para los miembros de la organización; la participación proactiva y comunicación entre
                                    sus
                                    integrantes; la distribución adecuada de cargas de trabajo, con jornadas laborales regulares conforme a
                                    la
                                    Ley Federal del Trabajo, y la evaluación y el reconocimiento del desempeño.
                                <p><span class="text-info">8.2 Las acciones y programas para la prevención de los factores de riesgo psicosocial, la promoción de un entorno organizacional favorable y la prevención de la violencia laboral, referidas en el numeral anterior, deberán considerar lo siguiente:</span>
                                </p>
                                <p>a) En relación con el liderazgo y las relaciones en el trabajo deberán incluir:</p>
                                <p>1) Acciones para el manejo de conflictos en el trabajo, la distribución de los tiempos de trabajo, y la
                                    determinación de prioridades en el trabajo;</p>
                                <p>2) Lineamientos para prohibir la discriminación y fomentar la equidad y el respeto;</p>
                                <p>3) Mecanismos para fomentar la comunicación entre supervisores o gerentes y trabajadores, así como entre
                                    los
                                    trabajadores;</p>
                                <p>4) Establecer y difundir instrucciones claras a los trabajadores para la atención de los problemas que
                                    impiden o limitan el desarrollo de su trabajo, cuando éstos se presenten, y</p>
                                <p>5) Capacitación y sensibilización de los directivos, gerentes y supervisores para la prevención de los
                                    factores de riesgo psicosocial y la promoción de entornos organizacionales favorables, con énfasis en lo
                                    señalado en los subincisos 1) al 3) de este inciso, según aplique;</p>
                                <p>b) Respecto a las cargas de trabajo deberán contener:</p>
                                <p>1) Revisión y supervisión que la distribución de la carga de trabajo se realice de forma equitativa y
                                    considerando el número de trabajadores, actividades a desarrollar, alcance de la actividad y su
                                    capacitación;</p>
                                <p>2) Actividades para planificar el trabajo, considerando el proceso productivo, de manera que se tengan
                                    las
                                    pausas o periodos necesarios de descanso, rotación de tareas y otras medidas necesarias para evitar
                                    ritmos
                                    de trabajo acelerados, y</p>
                                <p>3) Instructivos o procedimientos que definan claramente las tareas y responsabilidades;</p>
                                <p>c) En lo que se refiere al control de trabajo deberán comprender:</p>
                                <p>1) Actividades para involucrar a los trabajadores en la toma de decisiones sobre la organización de su
                                    trabajo; para que participen en la mejora de las condiciones de trabajo y la productividad siempre que
                                    el
                                    proceso productivo lo permita y cuenten con la experiencia y capacitación para ello;</p>
                                <p>2) Acciones para acordar y mejorar el margen de libertad y control sobre su trabajo por parte de los
                                    trabajadores y el patrón, y para impulsar que éstos desarrollen nuevas competencias o habilidades,
                                    considerando las limitaciones del proceso productivo, y</p>
                                <p>3) Reuniones para abordar las áreas de oportunidad de mejora, a efecto de atender los problemas en el
                                    lugar
                                    de su trabajo y determinar sus soluciones;</p>
                                <p>d) En lo relativo al apoyo social deberán incluir actividades que permitan:</p>
                                <p>1) Establecer relaciones entre trabajadores, supervisores, gerentes y patrones para que puedan obtener
                                    apoyo
                                    los unos de los otros;</p>
                                <p>2) Realizar reuniones periódicas (semestrales o anuales) de seguimiento a las actividades establecidas
                                    para
                                    el apoyo social y, en su caso, extraordinarias si ocurren eventos que pongan en riesgo la salud del
                                    trabajador o al centro de trabajo;</p>
                                <p>3) Promover la ayuda mutua y el intercambio de conocimientos y experiencias entre los trabajadores, y</p>
                                <p>4) Contribuir al fomento de las actividades culturales y del deporte entre sus trabajadores y
                                    proporcionarles
                                    los equipos y útiles indispensables;</p>
                                <p>e) En relación con el equilibrio en la relación trabajo-familia, contemplar:</p>
                                <p>1) Acciones para involucrar a los trabajadores en la definición de los horarios de trabajo cuando las
                                    condiciones del trabajo lo permitan;</p>
                                <p>2) Lineamientos para establecer medidas y límites que eviten las jornadas de trabajo superiores a las
                                    previstas en la Ley Federal del Trabajo;</p>
                                <p>3) Apoyos a los trabajadores, de manera que puedan atender emergencias familiares, mismas que el
                                    trabajador
                                    tendrá que comprobar, y</p>
                                <p>4) Promoción de actividades de integración familiar en el trabajo, previo acuerdo con los
                                    trabajadores;</p>
                                <p>f) Respecto al reconocimiento en el trabajo deberán contar con mecanismos que permitan:</p>
                                <p>1) Reconocer el desempeño sobresaliente (superior al esperado) de los trabajadores;</p>
                                <p>2) Difundir los logros de los trabajadores sobresalientes, y</p>
                                <p>3) En su caso, expresar al trabajador sus posibilidades de desarrollo;</p>
                                <p>g) En lo que se refiere a la prevención de la violencia laboral se deberá:</p>
                                <p>1) Difundir información para sensibilizar sobre la violencia laboral, tanto a trabajadores como a
                                    directivos,
                                    gerentes y supervisores;</p>
                                <p>2) Establecer procedimientos de actuación y seguimiento para tratar problemas relacionados con la
                                    violencia
                                    laboral, y capacitar al responsable de su implementación, y</p>
                                <p>3) Informar sobre la forma en que se deben denunciar actos de violencia laboral;</p>
                                <p>h) En relación con la información y comunicación que se proporciona a los trabajadores se deberá promover
                                    que:</p>
                                <p>1) El patrón, supervisor o jefe inmediato se comuniquen de forma directa y con frecuencia con los
                                    trabajadores sobre cualquier problema que impida o retrase el desarrollo del trabajo;</p>
                                <p>2) Los cambios en la organización o en las condiciones de trabajo se difundan entre los trabajadores,
                                    y</p>
                                <p>3) Los trabajadores puedan expresar sus opiniones sobre la solución de los problemas o la mejora de las
                                    condiciones de su trabajo que permitan mejorar su desempeño, e</p>
                                <p>i) Respecto a la capacitación y adiestramiento que se proporciona a los trabajadores se deberá cumplir
                                    con:</p>
                                <p>1) Analizar la relación capacitación-tareas encomendadas;</p>
                                <p>2) Dar oportunidad a los trabajadores para señalar sus necesidades de capacitación conforme a sus
                                    actividades, y</p>
                                <p>3) Realizar una detección de necesidades de capacitación al menos cada dos años e integrar su resultado
                                    en el
                                    programa de capacitación.</p>
                                <p><span class="text-info">8.3 Los centros de trabajo cuyo resultado de las evaluaciones a que se refieren los numerales 7.1 al 7.4, conforme a los criterios establecidos en el método aplicado, determinen la necesidad de desarrollar acciones de control, éstas se deberán implementar a través de un Programa que cumpla con lo previsto por el numeral 8.4 de la presente Norma.</span>
                                </p>
                                <p><span class="text-info">8.4 El Programa para la atención de los factores de riesgo psicosocial, y en su caso, para propiciar un entorno organizacional favorable y prevenir actos de violencia laboral deberá contener:</span>
                                </p>
                                <p>a) Las áreas de trabajo y/o los trabajadores sujetos al programa;</p>
                                <p>b) El tipo de acciones y las medidas de control que deberán adoptarse;</p>
                                <p>c) Las fechas programadas para su realización;</p>
                                <p>d) El control de los avances de la implementación del programa;</p>
                                <p>e) La evaluación posterior a la aplicación de las medidas de control, en su caso, y</p>
                                <p>f) El responsable de su ejecución.</p>
                                <p><span
                                        class="text-info">8.5 El tipo de acciones deberán realizarse, según aplique, en los niveles siguientes:</span>
                                </p>
                                <p>a) Primer nivel: Las acciones se centran en el plano organizacional e implican actuar sobre la política
                                    de
                                    prevención de riesgos psicosociales del centro de trabajo, la organización del trabajo, las acciones o
                                    medios para: disminuir los efectos de los factores de riesgo psicosocial, prevenir la violencia laboral
                                    y
                                    propiciar el entorno organizacional favorable.</p>
                                <p>b) Segundo nivel: Las acciones se orientan al plano grupal e implica actuar en la interrelación de los
                                    trabajadores o grupos de ellos y la organización del trabajo; su actuación se centra en el tiempo de
                                    trabajo, el comportamiento y las interacciones personales, se basan en proporcionar información al
                                    trabajador, así como en la sensibilización, (contempla temas como: manejo de conflictos, trabajo en
                                    equipo,
                                    orientación a resultados, liderazgo, comunicación asertiva, administración del tiempo de trabajo, entre
                                    otros), y reforzar el apoyo social, y/o</p>
                                <p>c) Tercer nivel: Las acciones se enfocan al plano individual; es decir, se desarrolla cuando se comprueba
                                    que
                                    existen signos y/o síntomas que denotan alteraciones en la salud, se incluyen intervenciones de tipo
                                    clínico
                                    o terapéutico.</p>
                                <p>intervenciones de tercer nivel que sean de tipo clínico o terapéutico deberán ser realizadas
                                    invariablemente
                                    por un médico, psicólogo o psiquiatra según corresponda.</p>
                            </section>
                            <section id="unidades">
                                <p><span class="text-primary">9. Unidades de verificación</span></p>
                                <p><span class="text-info">9.1 El patrón tendrá la opción de contratar una unidad de verificación acreditada y aprobada, en los términos de la Ley Federal sobre Metrología y Normalización y su Reglamento, para verificar el grado de cumplimiento con esta Norma.</span>
                                </p>
                                <p><span class="text-info">9.2 Las unidades de verificación que evalúen la conformidad con la presente Norma, deberán aplicar los criterios de cumplimiento que prevé el procedimiento para la evaluación de la conformidad, de acuerdo con lo señalado en el Capítulo 10 de la misma.</span>
                                </p>
                                <p><span class="text-info">9.3 Las unidades de verificación acreditadas y aprobadas que evalúen el cumplimiento con esta Norma deberán emitir un dictamen, el cual habrá de contener:</span>
                                </p>
                                <p>a) Datos del centro de trabajo verificado:</p>
                                <p>1) El nombre, denominación o razón social;</p>
                                <p>2) El Registro Federal de Contribuyentes;</p>
                                <p>3) El domicilio completo;</p>
                                <p>4) El teléfono, y</p>
                                <p>5) La actividad principal;</p>
                                <p>b) Datos de la unidad de verificación:</p>
                                <p>1) El nombre, denominación o razón social;</p>
                                <p>2) El número de acreditación;</p>
                                <p>3) El número de aprobación otorgado por la Secretaría del Trabajo y Previsión Social, y</p>
                                <p>4) Su domicilio completo;</p>
                                <p>c) Datos del dictamen:</p>
                                <p>1) La clave y nombre de la norma;</p>
                                <p>2) El nombre del verificador evaluado y aprobado;</p>
                                <p>3) La fecha de verificación;</p>
                                <p>4) El número de dictamen;</p>
                                <p>5) La vigencia del dictamen;</p>
                                <p>6) El lugar de emisión del dictamen;</p>
                                <p>7) La fecha de emisión del dictamen, y</p>
                                <p>8) El número de registro del dictamen emitido por la Secretaría del Trabajo y Previsión Social al
                                    rendirse el
                                    informe respectivo, y</p>
                                <p>d) El método que se utilizó para la identificación y análisis de los factores de riesgo psicosocial y el
                                    entorno organizacional, según aplique: los propuestos por las guías de referencia II o III de la
                                    presente
                                    Norma, o métodos desarrollados por el patrón que cumplan con lo dispuesto por los numerales 7.4 y 7.5 de
                                    esta Norma.</p>
                                <p><span class="text-info">9.4 La vigencia de los dictámenes emitidos por las unidades de verificación será de dos años, siempre y cuando no sean modificadas las condiciones que sirvieron para su emisión.</span>
                                </p>
                            </section>
                            <section id="procedimiento">
                                <p><span class="text-primary">10. Procedimiento para la evaluación de la conformidad</span></p>
                                <p><span class="text-info">10.1 Este procedimiento para la evaluación de la conformidad aplica tanto a las visitas de inspección desarrolladas por la autoridad laboral, como a las visitas de verificación que realicen las unidades de verificación.</span>
                                </p>
                                <p><span class="text-info">10.2 Los aspectos a verificar durante la evaluación de la conformidad de la presente Norma se realizarán, según aplique, mediante de la constatación, revisión documental, registros o entrevistas.</span>
                                </p>
                                <p><span class="text-info">10.3 Para la selección de trabajadores por entrevistar por parte de la autoridad laboral y/o las unidades de verificación, con el propósito de constatar el cumplimiento de las disposiciones que integran el presente procedimiento para la evaluación de la conformidad, se aplicará el criterio muestral.</span>
                                </p>
                                <p><span class="text-info">10.4 Las evidencias de tipo documental o los registros a que alude esta Norma podrán exhibirse de manera impresa o en medios electrónicos, y se deberán conservar al menos durante un año, a partir de la fecha de elaboración.</span>
                                </p>
                            </section>
                            <section id="vigilancia">
                                <p><span class="text-primary">11. Vigilancia</span></p>
                                <p>La vigilancia del cumplimiento de la presente Norma Oficial Mexicana corresponde a la Secretaría del
                                    Trabajo
                                    y Previsión Social.</p>
                            </section>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@stop
@section('css')

@stop

@section('js')

@stop
