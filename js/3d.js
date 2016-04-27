//-------------------3d-version-------------------
/*var visual = document.getElementById('visual'); 
var scene = new THREE.Scene(); //сцена
var camera = new THREE.PerspectiveCamera( 60, visual.offsetWidth/visual.offsetHeight, 0.1, 10000 ); //камера (fov, aspect ratio, near and far clipping plane)

var renderer = new THREE.WebGLRenderer({antialias:true}); //канвас

renderer.setClearColor(new THREE.Color(0xffffff, 1.0)); //общий цвет фона
renderer.setSize( visual.offsetWidth, visual.offsetHeight ); //окно рендера на все доступоне место
visual.appendChild( renderer.domElement );

var geometry = new THREE.BoxGeometry( 1, 1, 1); //width, height, length
var material = new THREE.MeshBasicMaterial( { color: 0xdddddd } );

var light = new THREE.PointLight(0x000000);
light.position.set(-100,200,100);

var cube = new THREE.Mesh( geometry, material );

camera.position.set(45,15,45);
camera.lookAt(scene.position);

var controls = new THREE.OrbitControls(camera, renderer.domElement);

var render = function () {
	scene.remove(cube);
	requestAnimationFrame( render );
	
	scene.add(light);
	scene.add( cube );
	
	cube.scale.x = width;
	cube.scale.y = height; 
	cube.scale.z = length;
	
	//cube.rotation.y -= 0.001;
		
	renderer.render(scene, camera);
};*/

/*var visual = document.getElementById('visual'); 
var scene, geometry, material, structure, roof, camera, renderer, controls;

var WIDTH  = visual.offsetWidth;
var HEIGHT = visual.offsetHeight;
var aspect = WIDTH / HEIGHT;

var SPEED = 0.001;

function init() {
    scene = new THREE.Scene();
	
	initGeometry();
	initMaterial();
    initRoof();
	initStructure();
    initCamera();
    initLights();
    initRenderer();
	initControls();	

    visual.appendChild(renderer.domElement);
}

function initGeometry() {
	geometry = new THREE.BoxGeometry( 1, 1, 1);
}

function initMaterial() {
	material = new THREE.MeshBasicMaterial( { color: 0xdddddd } );
}

function initCamera() {
    camera = new THREE.PerspectiveCamera(45, aspect, 0.1, 10000);
    camera.position.set(width + 25, height + 75, length + 25);
    camera.lookAt(scene.position);
}

function initControls() {
	controls = new THREE.OrbitControls(camera, renderer.domElement);
	
	controls.minDistance = 25;
	controls.maxDistance = 100;

	controls.minPolarAngle = Math.PI / 12;
	controls.maxPolarAngle = Math.PI * 0.5;
}

function initRenderer() {
    renderer = new THREE.WebGLRenderer({ antialias: true });
    renderer.setSize(WIDTH, HEIGHT);
	renderer.setClearColor(new THREE.Color(0xffffff, 1.0));
}

function initLights() {
    var light = new THREE.AmbientLight(0xffffff);
    scene.add(light);
}

function initRoof() {
    var loader = new THREE.JSONLoader();
    loader.load('../../metal/wp-content/themes/metal/js/models/roof-2.json', function(geometry, materials) {
        roof = new THREE.Mesh(geometry, new THREE.MeshFaceMaterial(materials));
		
        roof.translation = THREE.GeometryUtils.center(geometry);
		roof.position.y = height;
        scene.add(roof);
    });
}

function initStructure() {
	structure = new THREE.Mesh( geometry, material );	
	scene.add(structure);
}

function rotate() {
    scene.rotation.y -= SPEED;
}

function render() {
    requestAnimationFrame(render);
    rotate();	
	structure.scale.x = width;
	structure.scale.y = height; 
	structure.scale.z = length;
//	roof.scale.x = width;
//	roof.scale.y = height; 
//	roof.scale.z = length;	

    renderer.render(scene, camera);
}

init();
render();*/