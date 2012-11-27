<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */
?>

/*

All the weeks/activities can be hidden or shown, but to change that it has to be done manually. 
It could be interesting to be able to program when do we want this to be changed, 
and the system perform it automatically, maybe other events could be programmed, 
like to send a message to a given forum....

I think, is better to keep it apart from all the activities, and do a new block, 
Then changes you propose to each module are important, 
and includes to connect all of them with the cron and you will have to deal and not break many modules,. 
I think that maybe using the API, or capturing the right calls: 
for example looking how the “post to forum” page works, 
maybe you can capture the action performed by the send button, and store that one as an event. 
There is a simple table, where to store the data, a simple place where the cron must look at, 
but many different kind of events each of them with it's own procedure.... (4 students)

*/