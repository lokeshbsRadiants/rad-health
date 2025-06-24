// $(document).ready(function() {

//     let url = "https://intranet.radiants.com/RadiantWebsiteAPI/api/SearchJobsOnFilters";

//     // ?Searchkeywords=&country=&state=&Zipcode=&WithinMiles
   
//     // searching keywords
//     const searchByKeywordForm = document.querySelector('#searchByKeyword');
//     const jobSearchResultsEl = document.querySelector('#jobSearchResults');
//     const apiResponseEl = document.querySelector('#apiResponse');

//     // search by filter 
//     const searchByFilterEl = document.querySelector('#searchByFilter');


//     console.log(searchByFilterEl)



//     searchByKeywordForm.addEventListener('submit', function(e) {
        
//         e.preventDefault();



//         apiResponseEl.textContent = "Loading...";
//         // fetch api 
//         fetch('https://intranet.radiants.com/RadiantWebsiteAPI/api/SearchJobsOnFilters?Searchkeywords=&country=&state=&Zipcode=&WithinMiles', {
//             headers : {
//                 "Content-Type" : "application/json"
//             }
//         }).then(res => res.json()).then(data => {
//             console.log(data);
//             jobSearchResultsEl.innerHTML = "";
//             // loop through each of the jobs and make a div for them 
//             data.forEach(job => {
//                 let html = `
//                 <div >
//                                 <h5> ${job.JobTitle}  </h5>
//                                 <div class="d-flex" >
//                                 <div class="d-flex align-items-center mr-3 "> 
//                                 <svg xmlns="http://www.w3.org/2000/svg" height="20px" viewBox="0 -960 960 960" width="20px" fill="#777"
//                                 class=""
//                                 ><path d="M200-80q-33 0-56.5-23.5T120-160v-560q0-33 23.5-56.5T200-800h40v-80h80v80h320v-80h80v80h40q33 0 56.5 23.5T840-720v560q0 33-23.5 56.5T760-80H200Zm0-80h560v-400H200v400Zm0-480h560v-80H200v80Zm0 0v-80 80Zm280 240q-17 0-28.5-11.5T440-440q0-17 11.5-28.5T480-480q17 0 28.5 11.5T520-440q0 17-11.5 28.5T480-400Zm-160 0q-17 0-28.5-11.5T280-440q0-17 11.5-28.5T320-480q17 0 28.5 11.5T360-440q0 17-11.5 28.5T320-400Zm320 0q-17 0-28.5-11.5T600-440q0-17 11.5-28.5T640-480q17 0 28.5 11.5T680-440q0 17-11.5 28.5T640-400ZM480-240q-17 0-28.5-11.5T440-280q0-17 11.5-28.5T480-320q17 0 28.5 11.5T520-280q0 17-11.5 28.5T480-240Zm-160 0q-17 0-28.5-11.5T280-280q0-17 11.5-28.5T320-320q17 0 28.5 11.5T360-280q0 17-11.5 28.5T320-240Zm320 0q-17 0-28.5-11.5T600-280q0-17 11.5-28.5T640-320q17 0 28.5 11.5T680-280q0 17-11.5 28.5T640-240Z"/></svg>    
//                                 ${job.JobPosted}</div>
//                                 <div class="d-flex align-items-center mr-3"> 
//                                 <svg xmlns="http://www.w3.org/2000/svg" height="20px" viewBox="0 -960 960 960" width="20px" fill="#777"
//                                 class=""
//                                 ><path d="M480-480q-66 0-113-47t-47-113q0-66 47-113t113-47q66 0 113 47t47 113q0 66-47 113t-113 47ZM160-160v-112q0-34 17.5-62.5T224-378q62-31 126-46.5T480-440q66 0 130 15.5T736-378q29 15 46.5 43.5T800-272v112H160Zm80-80h480v-32q0-11-5.5-20T700-306q-54-27-109-40.5T480-360q-56 0-111 13.5T260-306q-9 5-14.5 14t-5.5 20v32Zm240-320q33 0 56.5-23.5T560-640q0-33-23.5-56.5T480-720q-33 0-56.5 23.5T400-640q0 33 23.5 56.5T480-560Zm0-80Zm0 400Z"/></svg>
//                                 <span class="mt-0 mb-0"> ${job.JobID} </span>
//                                 </div>  
//                             <div class="d-flex align-items-center"> 
//                                 <svg xmlns="http://www.w3.org/2000/svg" height="20px" viewBox="0 -960 960 960" width="20px" fill="#777"
//                                 class=""
//                                 ><path d="M480-480q33 0 56.5-23.5T560-560q0-33-23.5-56.5T480-640q-33 0-56.5 23.5T400-560q0 33 23.5 56.5T480-480Zm0 294q122-112 181-203.5T720-552q0-109-69.5-178.5T480-800q-101 0-170.5 69.5T240-552q0 71 59 162.5T480-186Zm0 106Q319-217 239.5-334.5T160-552q0-150 96.5-239T480-880q127 0 223.5 89T800-552q0 100-79.5 217.5T480-80Zm0-480Z"/></svg>    
                                
//                                 <span class="mt-0 mb-0"> ${job.City}, ${job.State}  </span> 
//                             </div>
//                             </div>
//                             <a class="btn btn-danger mt-3" href="job-board/${job.JobID}" > Details </a>
//                             </div>

//                             <hr> 
//                 `;
//                 // insert the html into the search result view
//                 jobSearchResultsEl.insertAdjacentHTML("beforeend", html)
//                 apiResponseEl.textContent = ""
//             })


//         }).catch(err => {
//             apiResponseEl.textContent = "failed to fetch. Try again later!";
//             console.log(err)
//         });

//     })















    



// });


// {/* <div >
//                                 <h5> Repair Service Associate 1 </h5>
//                                 <div class="d-flex" >
//                                 <div class="d-flex align-items-center mr-3 "> 
//                                 <svg xmlns="http://www.w3.org/2000/svg" height="20px" viewBox="0 -960 960 960" width="20px" fill="#777"
//                                 class=""
//                                 ><path d="M200-80q-33 0-56.5-23.5T120-160v-560q0-33 23.5-56.5T200-800h40v-80h80v80h320v-80h80v80h40q33 0 56.5 23.5T840-720v560q0 33-23.5 56.5T760-80H200Zm0-80h560v-400H200v400Zm0-480h560v-80H200v80Zm0 0v-80 80Zm280 240q-17 0-28.5-11.5T440-440q0-17 11.5-28.5T480-480q17 0 28.5 11.5T520-440q0 17-11.5 28.5T480-400Zm-160 0q-17 0-28.5-11.5T280-440q0-17 11.5-28.5T320-480q17 0 28.5 11.5T360-440q0 17-11.5 28.5T320-400Zm320 0q-17 0-28.5-11.5T600-440q0-17 11.5-28.5T640-480q17 0 28.5 11.5T680-440q0 17-11.5 28.5T640-400ZM480-240q-17 0-28.5-11.5T440-280q0-17 11.5-28.5T480-320q17 0 28.5 11.5T520-280q0 17-11.5 28.5T480-240Zm-160 0q-17 0-28.5-11.5T280-280q0-17 11.5-28.5T320-320q17 0 28.5 11.5T360-280q0 17-11.5 28.5T320-240Zm320 0q-17 0-28.5-11.5T600-280q0-17 11.5-28.5T640-320q17 0 28.5 11.5T680-280q0 17-11.5 28.5T640-240Z"/></svg>    
//                                 09/24/2024</div>
//                                 <div class="d-flex align-items-center mr-3"> 
//                                 <svg xmlns="http://www.w3.org/2000/svg" height="20px" viewBox="0 -960 960 960" width="20px" fill="#777"
//                                 class=""
//                                 ><path d="M480-480q-66 0-113-47t-47-113q0-66 47-113t113-47q66 0 113 47t47 113q0 66-47 113t-113 47ZM160-160v-112q0-34 17.5-62.5T224-378q62-31 126-46.5T480-440q66 0 130 15.5T736-378q29 15 46.5 43.5T800-272v112H160Zm80-80h480v-32q0-11-5.5-20T700-306q-54-27-109-40.5T480-360q-56 0-111 13.5T260-306q-9 5-14.5 14t-5.5 20v32Zm240-320q33 0 56.5-23.5T560-640q0-33-23.5-56.5T480-720q-33 0-56.5 23.5T400-640q0 33 23.5 56.5T480-560Zm0-80Zm0 400Z"/></svg>
//                                 <span class="mt-0 mb-0"> 201885 </span>
//                                 </div>  
//                             <div class="d-flex align-items-center"> 
//                                 <svg xmlns="http://www.w3.org/2000/svg" height="20px" viewBox="0 -960 960 960" width="20px" fill="#777"
//                                 class=""
//                                 ><path d="M480-480q33 0 56.5-23.5T560-560q0-33-23.5-56.5T480-640q-33 0-56.5 23.5T400-560q0 33 23.5 56.5T480-480Zm0 294q122-112 181-203.5T720-552q0-109-69.5-178.5T480-800q-101 0-170.5 69.5T240-552q0 71 59 162.5T480-186Zm0 106Q319-217 239.5-334.5T160-552q0-150 96.5-239T480-880q127 0 223.5 89T800-552q0 100-79.5 217.5T480-80Zm0-480Z"/></svg>    
                                
//                                 <span class="mt-0 mb-0"> Bangalore  </span> 
//                             </div>
//                             </div>
//                             <button class="btn btn-danger mt-3"> Details </button>
//                             </div>

//                             <hr>  */}