

const portfolioPostsBtn = document.getElementById("portfolio-posts-btn")
const portfolioPostsContainer = document.getElementById("portfolio-posts-container")

if (portfolioPostsBtn) {
	portfolioPostsBtn.addEventListener("click", function() {
		var ourRequest = new XMLHttpRequest();
		ourRequest.open('GET', 'http://localhost:3000/ortodont1/wp-json/wp/v2/projects');
		ourRequest.onload = function() {
			if (ourRequest.status >= 200 && ourRequest.status < 400) {
				let data = JSON.parse(ourRequest.responseText);
				createHTML(data)
				portfolioPostsBtn.remove()
			} else {
				console.log("We connected to the server, but it returned an error.");
			}
		};
		
		ourRequest.onerror = function() {
			console.log("Connection error");
		};
		
		ourRequest.send();		
	})
}

function createHTML(postsData) {
	let ourHTMLString = ""
	for(i=0; i< postsData.length; i++) {
		ourHTMLString += '<h2>' + postsData[i].title.rendered + '</h2>'
		//ourHTMLString += postsData[i].content.rendered + '</h2>'
	}
	portfolioPostsContainer.innerHTML = ourHTMLString
}