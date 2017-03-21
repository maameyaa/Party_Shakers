
 </!DOCTYPE html>
 <html>
 <head>
 	<title>Hello</title>
 </head>
 <body>
 
 <p>Name: {$Name}</p>

 <!-- {section name=outer
    loop=$FirstName}
        {if $smarty.section.outer.index is odd by 2}
            {$smarty.section.outer.rownum} . {$FirstName[outer]} {$LastName[outer]}
        {else}
            {$smarty.section.outer.rownum} * {$FirstName[outer]} {$LastName[outer]}
        {/if}
        {sectionelse}
        none
 {/section} -->


 {section name=sec1 loop=$contacts}
        phone: {$contacts[sec1].phone}
        <br>

            fax: {$contacts[sec1].fax}
        <br>

            cell: {$contacts[sec1].cell}
        <br>
    {/section}


 </body>
 </html>