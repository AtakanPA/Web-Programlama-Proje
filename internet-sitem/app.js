
const options = {
	method: 'GET',
	headers: {
		'X-RapidAPI-Host': 'movies-app1.p.rapidapi.com',
		'X-RapidAPI-Key': 'a17448630emsh8f3e60dbba2109ep13dda3jsn04a94fc56df6'
	}
};

fetch('https://movies-app1.p.rapidapi.com/api/movies?page=1&limit=5&sort=title&type=movies&query=The%20Lord%20Of%20The%20Rings', options)
	.then(response => response.json())
	.then(data =>{
		const list =data.results;
		list.map((item)=> {
			const name=item.titleOriginal;
			const poster=item.image.imageUrl;
			const movie='<li><h2>'.${name}.'</h2> <img src="'.${poster}.'"> </li>';
			document.querySelector('.movies').innerHTML +=movie; 
		})
	}


		)

	.catch(err => console.error(err));

