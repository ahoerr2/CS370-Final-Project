<?php include_once('header.php') ; ?>
    <h2 id="data-dictionary">Data Dictionary</h2>
    <h3 id="account">Account</h3>
    <ul>
        <li>ID - The ID number of the account. Must be unique.</li>
        <li>Username - The username of the account.</li>
        <li>Password - The password of the account.</li>
        <li>Email - The email of the account.</li>
        <li>PhoneNum - The phone number of the account holder.</li>
        <li>Bdate - The birthday of the account holder.</li>
        <li>Gender - The gender of the account holder.</li>
        <li>Pronouns - The pronouns of the account holder.</li>
        <li>Education - The education of the account holder.</li>
        <li>City - The city where the account holder lives.</li>
        <li>Relationship - The account holder’s relationship status.</li>
        <li>Workplace - The place where the account holder works.</li>
    </ul>
    <h3 id="friends">Friends</h3>
    <ul>
        <li>Acc_ID - The ID number of the account. This is a foreign key from the ID column in the Account table.</li>
        <li>Friend_ID - The ID number of the friend’s account.</li>
        <li>Date - The date when the account and friend’s account became friends.</li>
    </ul>
    <h3 id="block">Block</h3>
    <ul>
        <li>Acc_ID - The ID number of the account. This is a foreign key from the ID column in the Account table.</li>
        <li>Friend_ID - The ID number of the blocked friend’s account.</li>
    </ul>
    <h3 id="dms">DMS</h3>
    <ul>
        <li>DM_ID - The ID number of the Direct Message. Must be unique.</li>
        <li>Acc1_ID - The ID number of account 1 in Direct Message.</li>
        <li>Acc2_ID - The ID number of account 2 in Direct Message.</li>
    </ul>
    <h3 id="groups">Groups</h3>
    <ul>
        <li>Group_ID - The ID number of the group. Must be unique.</li>
        <li>Mgr_ID - The ID number of the group’s manager account. This is a foreign key from the ID column in the Account table.</li>
    </ul>
    <h3 id="group_invited">Group_Invited</h3>
    <ul>
        <li>Group_ID - The ID number of the group.</li>
        <li>Acc_ID - The ID number of the account. This is a foreign key from the ID column in the Account table. The ID is the account being invited to the page.</li>
    </ul>
    <h3 id="page">Page</h3>
    <ul>
        <li>Page_ID - The ID number of the page. Must be unique.</li>
        <li>Mgr_ID - The manager account’s ID. This is a foreign key from the ID column in the Account table.</li>
        <li>Title</li>
    </ul>
    <h3 id="page_invited">Page_Invited</h3>
    <ul>
        <li>Page_ID - The ID number of the page. This is a foreign key from the Page_ID column in the Page table.</li>
        <li>Acc_ID - The ID number of the account. The ID is the account being invited to the page.</li>
    </ul>
    <h3 id="posts">Posts</h3>
    <ul>
        <li>Post_ID - The ID number of the post. Must be unique.</li>
        <li>Acc_ID - The ID number of the account. This is a foreign key from the ID column in the Account table.</li>
        <li>Title - The title of the post.</li>
        <li>Description - The description of the post.</li>
        <li>Media - The media of the post. This is a foreign key from the Media_ID column in the Media table. Media can either be images or videos.</li>
        <li>Page_ID - The ID number of the page. This is a foreign key from the Page_ID column in the Page table.</li>
    </ul>
    <h3 id="media">Media</h3>
    <ul>
        <li>Media_ID - The ID number of the media. Must be unique. Media can either be images or videos.</li>
        <li>Photo - The photo type of media.</li>
        <li>Video - The video type of media.</li>
    </ul>
    <h3 id="comment">Comment</h3>
    <ul>
        <li>Comment_ID - The ID number of the comment. Must be unique.</li>
        <li>Page_ID - The ID number of the page. This is a foreign key from the Page_ID column in the Page table.</li>
        <li>Media_ID - The media of the comment. This is a foreign key from the Media_ID column in the Media table. Media can either be images or videos.</li>
        <li>Comment - The comment used for the post. It is the plaintext data for the comment.</li>
        <li>Post_ID - The ID number of the post. This is a foreign key from the Post_ID column in the Post table.</li>
    </ul>
    <h3 id="reaction">Reaction</h3>
    <ul>
        <li>Reaction_ID - The ID number of the reaction. Must be unique.</li>
        <li>Post_ID - The ID number of the post. This is a foreign key from the Post_ID column in the Post table.</li>
        <li>Emoji - The emoji used for the reaction.</li>
    </ul>
    <h3 id="ads">Ads</h3>
    <ul>
        <li>Ad_ID - The ID number of the ad. Must be unique.</li>
        <li>Page_ID - The ID number of the page.</li>
        <li>Title - The title of the advertiser. This is a foreign key from the Title column in the Advertiser table.</li>
        <li>Description - The description of the advertiser. This is a foreign key from the Description column in the Advertiser table.</li>
        <li>Media_ID - The media of the ad. This is a foreign key from the Media_ID column in the Media table. Media can either be images or videos.</li>
    </ul>
    <h3 id="advertiser">Advertiser</h3>
    <ul>
        <li>Adv_ID - The ID number of the advertiser. Must be unique.</li>
        <li>Title - The title of the advertiser.</li>
        <li>Logo - The logo of the advertiser.</li>
        <li>Description - The description of the advertiser.</li>
    </ul>




<?php include_once('footer.php') ; ?>