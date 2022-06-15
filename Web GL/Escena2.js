//==========================
var clock = new THREE.Clock();
//preparar el render
//Render
var Render = new THREE.WebGLRenderer();
//Eseceanrio
var Escenario = new THREE.Scene();
//Figura
var Particula;

var controls;
var ancho = window.innerWidth;
var alto = window.innerHeight;
var angulo = 45;
var aspecto = ancho/alto;
var cerca = 0.001;
var lejos = 10000;

//Camara
var Camara = new THREE.PerspectiveCamera(angulo,aspecto,cerca,lejos);
var ambientLight = new THREE.AmbientLight( 0x111111 );
//THREEx.WindowResize(Render,Camara);

/******************************Funciones*****************************/

try {
    inicio();
    animation();
} catch(e) {
	var errorReport = "Your program encountered an unrecoverable error, can not draw on canvas. Error was:<br/><br/>";
	$('#container').append(errorReport+e);
}

/********************************** Inicio **************************/

function inicio(){
    Render.setSize(ancho,alto);
    document.getElementById('container').appendChild(Render.domElement);
    Camara.position.z = 120;
    Camara.position.y = 100;
    Escenario.add(Camara);
    //crear_plano();
    cargar_suelo();
    cargar_pared();
    cargar_pizarra();
    cargar_pc();
    cargar_centro();

    Escenario.add(ambientLight);
    controls = new THREE.OrbitControls(Camara,Render.domElement);

}
function cargar_suelo(){
    Geometria_piso = new THREE.PlaneGeometry(100,100,10,10);
    Material_piso = new THREE.MeshBasicMaterial({color: 0xc8c8c8, side: THREE.DoubleSide});
    Terrirotio_piso = new THREE.Mesh(Geometria_piso,Material_piso);
    // Terrirotio_piso.rotation.y = 0.5;
    Terrirotio_piso.rotation.x = Math.PI/2;
    Escenario.add(Terrirotio_piso);
}
function cargar_pared(){
    //atras - adelante
    //ventana
    Geometria = new THREE.BoxGeometry( 20,8, 0.5 );
    Material = new THREE.MeshBasicMaterial({color: 0x048de6, side: THREE.DoubleSide});
    Terrirotio = new THREE.Mesh(Geometria,Material);
    Terrirotio.position.set(-20, 14, -49.5);
    Escenario.add(Terrirotio);

    Geometria = new THREE.BoxGeometry( 20,8, 0.5 );
    Material = new THREE.MeshBasicMaterial({color: 0x048de6, side: THREE.DoubleSide});
    Terrirotio = new THREE.Mesh(Geometria,Material);
    Terrirotio.position.set(20, 14, -49.5);
    Escenario.add(Terrirotio);

    Geometria = new THREE.BoxGeometry( 10,8, 0.5 );
    Material = new THREE.MeshBasicMaterial({color: 0x048de6, side: THREE.DoubleSide});
    Terrirotio = new THREE.Mesh(Geometria,Material);
    Terrirotio.position.set(-13, 15.8, 49.5);
    Escenario.add(Terrirotio);

    Geometria = new THREE.BoxGeometry( 10,8, 0.5 );
    Material = new THREE.MeshBasicMaterial({color: 0x048de6, side: THREE.DoubleSide});
    Terrirotio = new THREE.Mesh(Geometria,Material);
    Terrirotio.position.set(0, 15.8, 49.5);
    Escenario.add(Terrirotio);

    Geometria = new THREE.BoxGeometry( 10,8, 0.5 );
    Material = new THREE.MeshBasicMaterial({color: 0x048de6, side: THREE.DoubleSide});
    Terrirotio = new THREE.Mesh(Geometria,Material);
    Terrirotio.position.set(13, 15.8, 49.5);
    Escenario.add(Terrirotio);

    Geometria = new THREE.BoxGeometry( 10,8, 0.5 );
    Material = new THREE.MeshBasicMaterial({color: 0x048de6, side: THREE.DoubleSide});
    Terrirotio = new THREE.Mesh(Geometria,Material);
    Terrirotio.position.set(26, 15.8, 49.5);
    Escenario.add(Terrirotio);

    Geometria = new THREE.BoxGeometry( 10,8, 0.5 );
    Material = new THREE.MeshBasicMaterial({color: 0x048de6, side: THREE.DoubleSide});
    Terrirotio = new THREE.Mesh(Geometria,Material);
    Terrirotio.position.set(39, 15.8, 49.5);
    Escenario.add(Terrirotio);

    Geometria = new THREE.PlaneGeometry(100,20);
    Material = new THREE.MeshBasicMaterial({color: 0xf7e6e2, side: THREE.DoubleSide});
    Terrirotio = new THREE.Mesh(Geometria,Material);
    Terrirotio.position.set(0, 10, -50);
    Escenario.add(Terrirotio);



    Terrirotio = new THREE.Mesh(Geometria,Material);
    Terrirotio.position.set(0, 10, 50);
    Escenario.add(Terrirotio);
    //izquierda - derecha
    Terrirotio = new THREE.Mesh(Geometria,Material);
    Terrirotio.rotation.y = Math.PI/2;
    Terrirotio.position.set(-50, 10, 0);
    Escenario.add(Terrirotio);
    Terrirotio = new THREE.Mesh(Geometria,Material);
    Terrirotio.rotation.y = Math.PI/2;
    Terrirotio.position.set(50, 10, 0);
    Escenario.add(Terrirotio);

    //puerta
    Geometria = new THREE.BoxGeometry( 2, 20, 15 );
    //textura.repeat.set(1,1);
    Material = new THREE.MeshBasicMaterial({color: 0x70453a, side: THREE.DoubleSide});
    Terrirotio = new THREE.Mesh(Geometria,Material);
    // Terrirotio_piso.rotation.y = 0.5;
    Terrirotio.rotation.y = Math.PI/2;
    Terrirotio.position.set(-35, 10, 50);
    Escenario.add(Terrirotio);

}
function cargar_pizarra(){
    Geometria = new THREE.BoxGeometry( 35, 10,1);
    //textura.repeat.set(1,1);
    Material = new THREE.MeshBasicMaterial({color: 0x8a8c87, side: THREE.DoubleSide});
    Terrirotio = new THREE.Mesh(Geometria,Material);
    Terrirotio.rotation.y = Math.PI/2;
    Terrirotio.position.set(48.8, 13, 0);
    Escenario.add(Terrirotio);


}
function cargar_pc(){


    mueble(-15,0,-37);
    mueble(-15,0,-15);

    mueble(5,0,-37);
    mueble(5,0,-15);

    mueble(25,0,-37);
    mueble(25,0,-15);


    mueble(-15,0,37);
    mueble(-15,0,15);

    mueble(5,0,37);
    mueble(5,0,15);

    mueble(25,0,37);
    mueble(25,0,15);
}
function mueble(x, y, z){
    Material = new THREE.MeshBasicMaterial({color: 0x0d0e13, side: THREE.DoubleSide});
    Geometria = new THREE.BoxGeometry( 4, 1,9);
    Terrirotio = new THREE.Mesh(Geometria,Material);
    Terrirotio.position.set(x-1, y+10.5, z);
    Escenario.add(Terrirotio);


    Material = new THREE.MeshBasicMaterial({color: 0x472512, side: THREE.DoubleSide});
    Geometria = new THREE.BoxGeometry( 8, 1,10);
    Terrirotio = new THREE.Mesh(Geometria,Material);
    Terrirotio.position.set(x, y+9, z);
    Escenario.add(Terrirotio);
    
    Geometria = new THREE.BoxGeometry( 8, 10,1);
    Terrirotio = new THREE.Mesh(Geometria,Material);
    Terrirotio.position.set(x, y+5, z+5);
    Escenario.add(Terrirotio);
    
    Terrirotio = new THREE.Mesh(Geometria,Material);
    Terrirotio.position.set(x, y+5, z-5);
    Escenario.add(Terrirotio);
    Geometria = new THREE.BoxGeometry( 1, 8,10);

    Terrirotio = new THREE.Mesh(Geometria,Material);
    Terrirotio.position.set(x+4, y+4, z);
    Escenario.add(Terrirotio);
    //monitor
    Geometria = new THREE.BoxGeometry( 1, 4,8);
    Material = new THREE.MeshBasicMaterial({color:0x222222, side:THREE.DoubleSide});
    Terrirotio = new THREE.Mesh(Geometria,Material);
    Terrirotio.position.set(x+2, y+13, z);
    Escenario.add(Terrirotio);
    Geometria = new THREE.BoxGeometry( 1, 1,1);
    Terrirotio = new THREE.Mesh(Geometria,Material);
    Terrirotio.position.set(x+2, y+10.5, z);
    Escenario.add(Terrirotio);
    Geometria = new THREE.BoxGeometry( 1, 1,3);
    Terrirotio = new THREE.Mesh(Geometria,Material);
    Terrirotio.position.set(x+2, y+9.5, z);
    Escenario.add(Terrirotio);
    Geometria = new THREE.PlaneGeometry(8,4);
    Material = new THREE.MeshBasicMaterial({color:0x575757, side: THREE.DoubleSide});
    Terrirotio = new THREE.Mesh(Geometria,Material);
    Terrirotio.rotation.y = Math.PI/2;
    Terrirotio.position.set(x+1.5, y+13, z);
    Escenario.add(Terrirotio);
}

function cargar_centro(){
    silla(-25,0,-37);
    silla(-25,0,-15);

    silla(-25,0,37);
    silla(-25,0,15);

    silla(-5,0,-15);
    silla(-5,0,-37);

    silla(-5,0,37);
    silla(-5,0,15);

    silla(15,0,-37);
    silla(15,0,-15);

    silla(15,0,37);
    silla(15,0,15);

}
function silla(x,y,z){
    Geometria = new THREE.BoxGeometry( 0.5, 10, 0.5);
    textura = new THREE.ImageUtils.loadTexture('textures/metalico.jpg');
    Material = new THREE.MeshBasicMaterial({color:0xf0f1ef, side:THREE.DoubleSide});
    Terrirotio = new THREE.Mesh(Geometria,Material);
    //grande
    //2
    Terrirotio.position.set(x+-3.5, y+5, (z+-2));

    Escenario.add(Terrirotio);
    //3
    Terrirotio = new THREE.Mesh(Geometria,Material);
    Terrirotio.position.set(x+-3.5, y+5, (z+2));
    Escenario.add(Terrirotio);
    //pequeño
    // 1
    Geometria = new THREE.BoxGeometry( 0.5, 5, 0.5);
    Terrirotio = new THREE.Mesh(Geometria,Material);
    Terrirotio.position.set(x+3.5, y+2.5, (z+-2));
    Escenario.add(Terrirotio);
    //4
    Terrirotio = new THREE.Mesh(Geometria,Material);
    Terrirotio.position.set(x+3.5, y+2.5,(z+2) );

    Escenario.add(Terrirotio);

    Geometria = new THREE.BoxGeometry( 6.8, 0.5, 7);
    Material = new THREE.MeshBasicMaterial({color:0x222222, side:THREE.DoubleSide});
    Terrirotio = new THREE.Mesh(Geometria,Material);
    Terrirotio.position.set(x, y+5,z);
    Escenario.add(Terrirotio);

    Geometria = new THREE.BoxGeometry( 0.5, 7, 6.8);
    Terrirotio = new THREE.Mesh(Geometria,Material);
    Terrirotio.rotation.x = Math.PI/2;
    Terrirotio.position.set(x-3, y+9, (z+1));
    Escenario.add(Terrirotio);

}
function mesa(x){
    Geometria = new THREE.BoxGeometry( 30, 2, 10);
    textura = new THREE.ImageUtils.loadTexture('textures/escritorio.jpg');
    Material = new THREE.MeshBasicMaterial({map:textura, side:THREE.DoubleSide});
    Terrirotio = new THREE.Mesh(Geometria,Material);
    Terrirotio.position.set(x+0, 10, 0);
    Escenario.add(Terrirotio);
    Geometria = new THREE.BoxGeometry( 1, 10, 1);
    Terrirotio = new THREE.Mesh(Geometria,Material);
    Terrirotio.position.set(x+14, 5, 4);
    Escenario.add(Terrirotio);

    Terrirotio = new THREE.Mesh(Geometria,Material);
    Terrirotio.position.set(x+14, 5, -4);
    Escenario.add(Terrirotio);

    Terrirotio = new THREE.Mesh(Geometria,Material);
    Terrirotio.position.set(x+-14, 5, 4);
    Escenario.add(Terrirotio);

    Terrirotio = new THREE.Mesh(Geometria,Material);
    Terrirotio.position.set(x+-14, 5, -4);
    Escenario.add(Terrirotio);
}


function animation(){
    requestAnimationFrame(animation);
    render_modelo();
}
function render_modelo(){
    var delta = clock.getDelta();
	controls.update(delta);
    Render.render(Escenario,Camara);
}