const options = {
	method: 'GET',
	headers: {
		'X-RapidAPI-Host': 'online-movie-database.p.rapidapi.com',
		'X-RapidAPI-Key': 'a17448630emsh8f3e60dbba2109ep13dda3jsn04a94fc56df6'
	}
};

fetch('https://online-movie-database.p.rapidapi.com/auto-complete?q=Lord%20The', options)
.then(response => response.json())
.then(data => {
	const list=data.d;
	list.map((item)=>{
		console.log(item);
		const name=item.l;
		const poster=item.i.imageUrl;

		var movie='<div class="border-danger col-lg-3 mt-5  d-inline-block"><p class="float-left ">'+ name+'</p> <img class="rounded m-1" style="max-height:250px !important;" src="'+poster+'"></div>';
		
			document.querySelector('.app').innerHTML +=movie;

		
		
	})
} 
	)
	.catch(err => console.error(err));





