---
toc: true
comments: true
layout: post
title: Trimester 3 Writeup data structure | CPT, CB Reqs, & more
type: hacks
courses: { compsci: {week: 11 } }
---


A reflection of my work this trimester on our CPT project including my contributions, experience, and results, as well as a trimester-wide summary of how I worked on and experienced CSP.

I will be going over how our project and specifically my feature fulfills these requirements below, after going over the general idea of our project.

## CPT | The aim of the Project

- Create a replica of Spotify
- Have a login page
- allow users to see songs, create playlists

### Main Individual Feature:
- Create Playlists Feature
- Styling component of login page


## CPT | What did I contribute and reflection

Reflecting on the work I have done over this trimester on our CPT project has been both challenging and rewarding. Our project aimed to create a replica of Spotify, complete with a login page and features that allowed users to explore songs and create playlists. This ambitious goal required collaborative effort, innovative thinking, and a keen attention to detail.

One of my main individual contributions to the project was the creation of the Playlists feature. This feature was a crucial aspect of our Spotify replica, as playlists are an integral part of the user experience. Implementing this feature required a deep understanding of the Spotify functionality and a careful consideration of how users interact with playlists.

To start, I began by defining the user requirements for creating playlists. I focused on ensuring that the process was intuitive and user-friendly. I implemented features that allowed users to easily add and remove songs from playlists, reorder tracks, and customize playlist details. Testing was a crucial part of this process, as I wanted to make sure that the feature was not only functional but also enjoyable to use.

Additionally, I took on the responsibility of styling the login page. While it might seem like a small aspect of the project, the login page serves as the first point of contact for users. A visually appealing and well-designed login page sets the tone for the entire application. I paid attention to color schemes, fonts, and overall layout to create a cohesive and inviting login experience.

Throughout the development of these features, I faced challenges that pushed me to expand my skills. Debugging issues, optimizing code for performance, and ensuring compatibility across different devices were all part of the learning process. Collaborating with team members to integrate my features seamlessly into the larger project also taught me the importance of effective communication and version control.

In terms of the overall trimester, working on the CPT project was a holistic learning experience. I gained valuable insights into software development processes, project management, and the importance of meeting deadlines. The project demanded a balance between creativity and technical proficiency, and I believe my contributions played a significant role in enhancing the overall functionality and aesthetics of our Spotify replica.

Looking back, I am proud of what our team has accomplished. Our CPT project not only met the initial goals of creating a Spotify replica but also provided us with a platform to showcase our individual and collective strengths. The experience has deepened my appreciation for the complexities of software development and fueled my enthusiasm for future projects.

In conclusion, this trimester has been a journey of growth, collaboration, and achievement. The challenges I faced and overcame during the development of the Playlists feature and the login page have enriched my skill set and reinforced the importance of teamwork in achieving ambitious goals. I am confident that the skills and experiences gained during this project will serve as a solid foundation for my future endeavors in the field of computer science and software development.

<br> 

![]({{ site.baseurl }}/images/keycommits1.png ) 
![]({{ site.baseurl }}/images/keycommits2.png ) 

<html>


The fetch API in JavaScript is frequently used to make network queries in order to retrieve resources from a server. Usually, when you use fetch to retrieve an array of JSON objects, you send the request to a particular server endpoint. When the response is received, it is handled in a.then() block where its body is parsed as JSON and its status is checked. You may now manipulate or show this parsed JSON data—which represents an array of objects—in your application. In order to handle any potential difficulties that can occur during the fetching process, such as network faults or server-side issues, it is imperative to incorporate error handling using.catch(). You may efficiently retrieve and use JSON data in your JavaScript application by following these steps.
show and describe code that handles success. Describe how code shows success to the user in the Chrome Browser screen (javascript)
The given JavaScript code shows how to respond to a successful fetch operation and inform the user on the Chrome Browser screen of the data that has been fetched. When the fetchData function is called, a request is sent to a specified server endpoint. Within the retrieve promise chain, the server's answer is examined to see if the status code indicates that the request was successful. An error is raised if the response indicates that the request was not successful. On the other hand, in the event that the fetch operation is successful, the response content is parsed as JSON in the.then() block that follows. The JSON data that has been parsed is next processed; in this case, it is shown to the user and logged to the console.

<br> 

![]({{ site.baseurl }}/images/writeup1.png )

![]({{ site.baseurl }}/images/pranavisblogcover.png )

![]({{ site.baseurl }}/images/pranavisblogcover.png )
<html>



- The JavaScript code that is provided shows how to handle fetch operation failures and notify the user on the Chrome browser screen. The fetchData function sends a request to the designated server endpoint when it is called. The code looks at the status code within the fetch promise chain to determine whether the server's response was successful. An error is raised if the response shows that the request was not successful. Any failures, including server-side or network-related ones, that arise during the fetch process are caught in the.catch() block that follows. When something goes wrong, the code logs the error to the console so that debugging can take place. In order to include the data, it also automatically generates a new paragraph() element.


## Linear regression:
- A statistical method called linear regression is used to model the relationship between a target or dependent variable and one or more predictors or independent variables. In order to obtain the best-fitting line that minimizes the discrepancies between observed and anticipated values, it assumes a linear relationship between the variables. Whereas multiple linear regression uses many predictors, simple linear regression just uses one. The relationship is represented by the equation of the regression line, y = mx + b, where y is the expected value, x is the predictor, m is the slope, and b is the intercept. Linearity, residual independence, homoscedasticity, and residual normality are among the presumptions. Ordinary least squares is one approach used to estimate coefficients.