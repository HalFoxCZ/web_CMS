# Halfoxe's web CMS documentation

---

This is a documentation for my CMS panel.

You will find here everything you need to know to 
be able to edit your page's content to your liking. <br>
Currently I dont support adding own styling, but will probably add more
default styles to choose from, depending on my time and will to live.

<details>
<summary> 

## Settings manager:</summary>

 You can manage values of all possible editable settings in here. 
>
> Usage:
> - Select a setting value you want to edit from the dropdown menu.
> - It's value will be displayed in box under.
> - Now you can edit it almost freely. If its a boolean value, you can only switch between True and False option.
> - After you finish editing the value, press the <button>Save</button> button. You will be informed if the action was performed correctly.
> 
> All settings used now:
>
> | Name | Value datatype | Info |
> |------|--------|------|
> | name | string/text | A name that is displayed on website |
> | name_first | boolean | Determins if name should be above or under icon |
> | dynamic_name | boolean | Determins if name should be on first load animated or not |
> | maintanance | boolean | Turns on maintanance mode. While in maintanance mod, <br> no content other then icon, name, and social links <br> will be displayed|
> | about_me | string/text | This text will be displayed on the homepage of your website.<br> Limit is 750 characters (shall be more then enough) |
> | price_asc | bool | Determins if offers should be displayed with price ascending or descending |

</details>



<details> 
<summary>

## Sections & Offer mannager</summary>

Here you can edit your sections and offers displayed in it.

<b>Note: for offers, you first need to select coresponding 

section in the Section part. 
<br>
<br>
Only offers from selected section are displayed in the dropdown menu.
</b>

#### Editing, Adding and Deletings: 



> - Editing:
> > - Select a section or offer you want to edit from dropdown menu.
> > - After you select the section or offer , you can edit its parametrs.
> > - When you done, click the <button>Rename section</button> or <button>Update offer</button> button depending on what you editing.
>
> - Adding:
> > - Type parametrs for new section or offer in bottom text pannel.
> > - When you done, click the <button>Add section</button> or <button>Add offer</button> button depending on what you adding.
>
> - Deleting:
> > - Select a section or offer you want to delete.
> > - After that, click the <button>Delete section</button> or <button>Delete offer</button> button depending on what you want to delete.
> > - You will be promted if you really want to delete it.
> > - If you do, click the <button>yes</button> button, otherwise click the <button>cancel</button> button.




</details>


<details>

<summary>

## TOS manager </summary>

In this section, you can edit your TOS page. 

It works same as the previous Sections & Offers manager, but there are extra features.
<br>
<br>
How to corectly use TOS manager:

> All TOS are united and grouped by name. 
>
> You have to allways declare a new TOS group by creating a following these instructions:
> > - First to declare new group, create a new TOS
> > - in the name, use your group name and add `_title` to end of it (for example `General_title`)
> > - For text, write what title you want this group to have (for example `General`) and but it in H3 tag (`<h3>General</h3>`).
> > - to add new TOS to  that group, set the name to Group name and <br> add some text after soo you can identifie it (for example `General_1`)
> > - <b>IMPROTANT</b> - do NOT use as identifier name same as another group, it might break the system <br> (I did not test it, but I doubt it would work correctly)
> > - Then just add your TOS text as usual for offer.  and as name allways set coresponding Group name.


</details>






<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
