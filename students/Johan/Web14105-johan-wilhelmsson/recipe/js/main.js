console.log("main.js redy to go");


//select the button using jquery
$("button").on("click",searchForRecipes);

function searchForRecipes() {

    //select input using JQuery
    //create a variable
    //use the val() function to get the input value
    var search = $('input[type=text]').val();
    console.log(search);
    
    //use this function to search for recipes on the Edamam API
    //pass the valu that the user has typed in
    getRecipesFromAPI(search, displayRecipes);
}

function displayRecipes(responseJSON){

    console.log(responseJSON);
    
    var hitsArray = responseJSON.hits;
    var counter = 0;
    var total = hitsArray.length;
    while(counter < total) {
        
        var hit = hitsArray[counter];
        var recipe = hit.recipe;
        console.log(recipe);
        
        var li = getRecipeListItem(recipe);
        
        
        $("ul").append(li);
        
        
        counter = counter + 1;
    }
}

function myFunction() {
document.getElementById("thank-you").innerHTML = "Thank you for hovering my button";
}

// https://www.mashape.com/edamam/recipe-search-and-diet
// The Edamam Recipe Search API lets you search over 1.5 million recipes from 500+ top web recipe sources

// this function takes in a phrase to search (searchString)..
// ..and a function to execute when we receive data from the API (callbackFunction)
function getRecipesFromAPI(searchString, callbackFunction) {

    // this is the API endpoint, which means the URL to which our search request is sent
    var apiEndpoint = 'https://api.edamam.com/search';

    // we're sending some data with our request
    var apiData = {
        // the app ID and key work like a library card 
        // every time we're borrowing some data from Edamam (the API service provider)
        // we use these to let Edamam know it's us
        _app_id: '602e4c99',
        _app_key: 'badc73a4282fd038b7547e9c5854a2d6',
        // q stands for query, and it's the search term for an ingredient or a recipe
        q: searchString
    }

    // perform an asynchronous HTTP (Ajax) request using jQuery
    // learn more about it at https://api.jquery.com/jQuery.ajax
    // $ is a shortcut for jQuery
    $.ajax({
        // send the request to the API endpoint
        url: apiEndpoint,
        // the request data we're sending
        data: apiData,
        // we want to receive a JSON object
        dataType: 'jsonp',

        // what to do when the API responds with some data
        success: function(responseJSON)  {
            // at this point we can call the callback function
            callbackFunction(responseJSON);              
        }
    })
}

// this function is like an HTML sausage machine
// pass in some recipe data
// and it will return an HTML list item wrapped around that data
function getRecipeListItem(recipe)
{
    // create a variable to store the HTML code
    // we put the static (non variable) bits in speech marks
    // and the variable bits outside of speech marks
    var li = "<li>"
        + "<img src=" + recipe.image + ">"
        + "<h3>" + recipe.label + "</h3>"
        + "<p>This recipe is <b>" + recipe.level + "</b> and will take you " + recipe.totalTime + " minutes to prepare.</p>"
        + "<a href=" + recipe.url + " target=_blank>Let's make this recipe</a>"
        + "</li>"

    return li    
}