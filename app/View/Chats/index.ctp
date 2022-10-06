 <style>
 @charset "UTF-8";
@import url("https://fonts.googleapis.com/css?family=Manrope:300,400,500,600,700&display=swap&subset=latin-ext");
:root {
  --body-bg-color: #e5ecef;
  --theme-bg-color: #fff;
  --settings-icon-hover: #9fa7ac;
  --developer-color: #f9fafb;
  --input-bg: #f8f8fa;
  --input-chat-color: #a2a2a2;
  --border-color: #eef2f4;
  --body-font: "Manrope", sans-serif;
  --body-color: #273346;
  --settings-icon-color: #c1c7cd;
  --msg-message: #969eaa;
  --chat-text-bg: #f1f2f6;
  --theme-color: #0086ff;
  --msg-date: #c0c7d2;
  --button-bg-color: #f0f7ff;
  --button-color: var(--theme-color);
  --detail-font-color: #919ca2;
  --msg-hover-bg: rgba(238, 242, 244, 0.4);
  --active-conversation-bg: linear-gradient(
   to right,
   rgba(238, 242, 244, 0.4) 0%,
   rgba(238, 242, 244, 0) 100%
  );
  --overlay-bg: linear-gradient(
   to bottom,
   rgba(255, 255, 255, 0) 0%,
   rgba(255, 255, 255, 1) 65%,
   rgba(255, 255, 255, 1) 100%
  );
  --chat-header-bg: linear-gradient(
   to bottom,
   rgba(255, 255, 255, 1) 0%,
   rgba(255, 255, 255, 1) 78%,
   rgba(255, 255, 255, 0) 100%
  );
}

[data-theme="purple"] {
  --theme-color: #9f7aea;
  --button-color: #9f7aea;
  --button-bg-color: rgba(159, 122, 234, 0.12);
}

[data-theme="green"] {
  --theme-color: #38b2ac;
  --button-color: #38b2ac;
  --button-bg-color: rgba(56, 178, 171, 0.15);
}

[data-theme="orange"] {
  --theme-color: #ed8936;
  --button-color: #ed8936;
  --button-bg-color: rgba(237, 137, 54, 0.12);
}

.dark-mode {
  --body-bg-color: #1d1d1d;
  --theme-bg-color: #27292d;
  --border-color: #323336;
  --body-color: #d1d1d2;
  --active-conversation-bg: linear-gradient(
   to right,
   rgba(47, 50, 56, 0.54),
   rgba(238, 242, 244, 0) 100%
  );
  --msg-hover-bg: rgba(47, 50, 56, 0.54);
  --chat-text-bg: #383b40;
  --chat-text-color: #b5b7ba;
  --msg-date: #626466;
  --msg-message: var(--msg-date);
  --overlay-bg: linear-gradient(
   to bottom,
   rgba(0, 0, 0, 0) 0%,
   #27292d 65%,
   #27292d 100%
  );
  --input-bg: #2f3236;
  --chat-header-bg: linear-gradient(
   to bottom,
   #27292d 0%,
   #27292d 78%,
   rgba(255, 255, 255, 0) 100%
  );
  --settings-icon-color: #7c7e80;
  --developer-color: var(--border-color);
  --button-bg-color: #393b40;
  --button-color: var(--body-color);
  --input-chat-color: #6f7073;
  --detail-font-color: var(--input-chat-color);
}

https://github.com/ajaxorg/ace/wiki/Default-Keyboard-Shortcuts.blue {
  background-color: #0086ff;
}

.purple {
  background-color: #9f7aea;
}

.green {
  background-color: #38b2ac;
}

.orange {
  background-color: #ed8936;
}

.app {
  display: flex;
  flex-direction: column;
  background-color: var(--theme-bg-color);
  max-width: 1600px;
  height: 100vh;
  margin: 0 auto;
  overflow: hidden;
}

.wrapper {
  width: 100%;
  display: flex;
  flex-grow: 1;
  overflow: hidden;
}

.conversation-area,
.detail-area {
  width: 340px;
  flex-shrink: 0;
}

.detail-area {
  border-left: 1px solid var(--border-color);
  margin-left: auto;
  padding: 30px 30px 0 30px;
  display: flex;
  flex-direction: column;
  overflow: auto;
}

.chat-area {
  flex-grow: 1;
}

.search-bar {
  height: 80px;
  z-index: 3;
  position: relative;
  margin-left: 280px;
}
.search-bar input {
  height: 100%;
  width: 100%;
  display: block;
  background-color: transparent;
  border: none;
  color: var(--body-color);
  padding: 0 54px;
  background-image: url("data:image/svg+xml;charset=UTF-8,%3csvg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 56.966 56.966' fill='%23c1c7cd'%3e%3cpath d='M55.146 51.887L41.588 37.786A22.926 22.926 0 0046.984 23c0-12.682-10.318-23-23-23s-23 10.318-23 23 10.318 23 23 23c4.761 0 9.298-1.436 13.177-4.162l13.661 14.208c.571.593 1.339.92 2.162.92.779 0 1.518-.297 2.079-.837a3.004 3.004 0 00.083-4.242zM23.984 6c9.374 0 17 7.626 17 17s-7.626 17-17 17-17-7.626-17-17 7.626-17 17-17z'/%3e%3c/svg%3e");
  background-repeat: no-repeat;
  background-size: 16px;
  background-position: 25px 48%;
  font-family: var(--body-font);
  font-weight: 600;
  font-size: 15px;
}
.search-bar input::placeholder {
  color: var(--input-chat-color);
}

.user-settings {
  display: flex;
  align-items: center;
  cursor: pointer;
  margin-left: auto;
  flex-shrink: 0;
}
.user-settings > * + * {
  margin-left: 14px;
}

.dark-light {
  width: 22px;
  height: 22px;
  color: var(--settings-icon-color);
  flex-shrink: 0;
}
.dark-light svg {
  width: 100%;
  fill: transparent;
  transition: 0.5s;
}

.user-profile {
  width: 40px;
  height: 40px;
  border-radius: 50%;
}

.settings {
  color: var(--settings-icon-color);
  width: 22px;
  height: 22px;
  flex-shrink: 0;
}

.conversation-area {
  border-right: 1px solid var(--border-color);
  overflow-y: auto;
  overflow-x: hidden;
  display: flex;
  flex-direction: column;
  position: relative;
}

.msg-profile {
  width: 44px;
  height: 44px;
  border-radius: 50%;
  object-fit: cover;
  margin-right: 15px;
}
.msg-profile.group {
  display: flex;
  justify-content: center;
  align-items: center;
  background-color: var(--border-color);
}
.msg-profile.group svg {
  width: 60%;
}

.msg {
  display: flex;
  align-items: center;
  padding: 20px;
  cursor: pointer;
  transition: 0.2s;
  position: relative;
}
.msg:hover {
  background-color: var(--msg-hover-bg);
}
.msg.active {
  background: var(--active-conversation-bg);
  border-left: 4px solid var(--theme-color);
}
.msg.online:before {
  content: "";
  position: absolute;
  background-color: #23be7e;
  width: 9px;
  height: 9px;
  border-radius: 50%;
  border: 2px solid var(--theme-bg-color);
  left: 50px;
  bottom: 19px;
}

.msg-username {
  margin-bottom: 4px;
  font-weight: 600;
  font-size: 15px;
}

.msg-detail {
  overflow: hidden;
}

.msg-content {
  font-weight: 500;
  font-size: 13px;
  display: flex;
}

.msg-message {
  white-space: nowrap;
  overflow: hidden;
  text-overflow: ellipsis;
  color: var(--msg-message);
}

.msg-date {
  font-size: 14px;
  color: var(--msg-date);
  margin-left: 3px;
}
.msg-date:before {
  content: "•";
  margin-right: 2px;
}

.add {
  position: sticky;
  bottom: 25px;
  background-color: var(--theme-color);
  width: 60px;
  height: 60px;
  border: 0;
  border-radius: 50%;
  background-image: url("data:image/svg+xml;charset=UTF-8,%3csvg xmlns='http://www.w3.org/2000/svg' width='24' height='24' fill='none' stroke='white' stroke-width='2' stroke-linecap='round' stroke-linejoin='round' class='feather feather-plus'%3e%3cpath d='M12 5v14M5 12h14'/%3e%3c/svg%3e");
  background-repeat: no-repeat;
  background-position: 50%;
  background-size: 28px;
  box-shadow: 0 0 16px var(--theme-color);
  margin: auto auto -55px;
  flex-shrink: 0;
  z-index: 1;
  cursor: pointer;
}

.overlay {
  position: sticky;
  bottom: 0;
  left: 0;
  width: 340px;
  flex-shrink: 0;
  background: var(--overlay-bg);
  height: 80px;
}

.chat-area {
  display: flex;
  flex-direction: column;
  overflow: auto;
}
.chat-area-header {
  display: flex;
  position: sticky;
  top: 0;
  left: 0;
  z-index: 2;
  width: 100%;
  align-items: center;
  justify-content: space-between;
  padding: 20px;
  background: var(--chat-header-bg);
}
.chat-area-profile {
  width: 32px;
  border-radius: 50%;
  object-fit: cover;
}
.chat-area-title {
  font-size: 18px;
  font-weight: 600;
}
.chat-area-main {
  flex-grow: 1;
}

.chat-msg-img {
  height: 40px;
  width: 40px;
  border-radius: 50%;
  object-fit: cover;
}

.chat-msg-profile {
  flex-shrink: 0;
  margin-top: auto;
  margin-bottom: -20px;
  position: relative;
}

.chat-msg-date {
  position: absolute;
  left: calc(100% + 12px);
  bottom: 0;
  font-size: 12px;
  font-weight: 600;
  color: var(--msg-date);
  white-space: nowrap;
}

.chat-msg {
  display: flex;
  padding: 0 20px 45px;
}
.chat-msg-content {
  margin-left: 12px;
  max-width: 70%;
  display: flex;
  flex-direction: column;
  align-items: flex-start;
}
.chat-msg-text {
  background-color: var(--chat-text-bg);
  padding: 15px;
  border-radius: 20px 20px 20px 0;
  line-height: 1.5;
  font-size: 14px;
  font-weight: 500;
}
.chat-msg-text + .chat-msg-text {
  margin-top: 10px;
}

.chat-msg-text {
  color: var(--chat-text-color);
}

.owner {
  flex-direction: row-reverse;
}
.owner .chat-msg-content {
  margin-left: 0;
  margin-right: 12px;
  align-items: flex-end;
}
.owner .chat-msg-text {
  background-color: var(--theme-color);
  color: #fff;
  border-radius: 20px 20px 0 20px;
}
.owner .chat-msg-date {
  left: auto;
  right: calc(100% + 12px);
}

.chat-msg-text img {
  max-width: 300px;
  width: 100%;
}

.chat-area-footer {
  display: flex;
  border-top: 1px solid var(--border-color);
  width: 100%;
  padding: 10px 20px;
  align-items: center;
  background-color: var(--theme-bg-color);
  position: sticky;
  bottom: 0;
  left: 0;
}

.chat-area-footer svg {
  color: var(--settings-icon-color);
  width: 20px;
  flex-shrink: 0;
  cursor: pointer;
}
.chat-area-footer svg:hover {
  color: var(--settings-icon-hover);
}
.chat-area-footer svg + svg {
  margin-left: 12px;
}

.chat-area-footer input {
  border: none;
  color: var(--body-color);
  background-color: var(--input-bg);
  padding: 12px;
  border-radius: 6px;
  font-size: 15px;
  margin: 0 12px;
  width: 100%;
}
.chat-area-footer input::placeholder {
  color: var(--input-chat-color);
}

.detail-area-header {
  display: flex;
  flex-direction: column;
  align-items: center;
}
.detail-area-header .msg-profile {
  margin-right: 0;
  width: 60px;
  height: 60px;
  margin-bottom: 15px;
}

.detail-title {
  font-size: 18px;
  font-weight: 600;
  margin-bottom: 10px;
}

.detail-subtitle {
  font-size: 12px;
  font-weight: 600;
  color: var(--msg-date);
}

.detail-button {
  border: 0;
  background-color: var(--button-bg-color);
  padding: 10px 14px;
  border-radius: 5px;
  color: var(--button-color);
  display: flex;
  align-items: center;
  justify-content: center;
  font-size: 14px;
  flex-grow: 1;
  font-weight: 500;
}
.detail-button svg {
  width: 18px;
  margin-right: 10px;
}
.detail-button:last-child {
  margin-left: 8px;
}

.detail-buttons {
  margin-top: 20px;
  display: flex;
  width: 100%;
}

.detail-area input {
  background-color: transparent;
  border: none;
  width: 100%;
  color: var(--body-color);
  background-image: url("data:image/svg+xml;charset=UTF-8,%3csvg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 56.966 56.966' fill='%23c1c7cd'%3e%3cpath d='M55.146 51.887L41.588 37.786A22.926 22.926 0 0046.984 23c0-12.682-10.318-23-23-23s-23 10.318-23 23 10.318 23 23 23c4.761 0 9.298-1.436 13.177-4.162l13.661 14.208c.571.593 1.339.92 2.162.92.779 0 1.518-.297 2.079-.837a3.004 3.004 0 00.083-4.242zM23.984 6c9.374 0 17 7.626 17 17s-7.626 17-17 17-17-7.626-17-17 7.626-17 17-17z'/%3e%3c/svg%3e");
  background-repeat: no-repeat;
  background-size: 16px;
  background-position: 100%;
  font-family: var(--body-font);
  font-weight: 600;
  font-size: 14px;
  border-bottom: 1px solid var(--border-color);
  padding: 14px 0;
}
.detail-area input::placeholder {
  color: var(--detail-font-color);
}

.detail-changes {
  margin-top: 40px;
}

.detail-change {
  color: var(--detail-font-color);
  font-family: var(--body-font);
  font-weight: 600;
  font-size: 14px;
  border-bottom: 1px solid var(--border-color);
  padding: 14px 0;
  display: flex;
}
.detail-change svg {
  width: 16px;
  margin-left: auto;
}

.colors {
  display: flex;
  margin-left: auto;
}

.color {
  width: 16px;
  height: 16px;
  border-radius: 50%;
  cursor: pointer;
}
.color.selected {
  background-image: url("data:image/svg+xml;charset=utf-8,%3Csvg xmlns='http://www.w3.org/2000/svg' stroke='%23fff' stroke-width='3' fill='none' stroke-linecap='round' stroke-linejoin='round' class='css-i6dzq1' viewBox='0 0 24 24'%3E%3Cpath d='M20 6L9 17l-5-5'/%3E%3C/svg%3E");
  background-size: 10px;
  background-position: center;
  background-repeat: no-repeat;
}
.color:not(:last-child) {
  margin-right: 4px;
}

.detail-photo-title {
  display: flex;
  align-items: center;
}
.detail-photo-title svg {
  width: 16px;
}

.detail-photos {
  margin-top: 30px;
  text-align: center;
}

.detail-photo-title {
  color: var(--detail-font-color);
  font-weight: 600;
  font-size: 14px;
  margin-bottom: 20px;
}
.detail-photo-title svg {
  margin-right: 8px;
}

.detail-photo-grid {
  display: grid;
  grid-template-columns: repeat(4, 1fr);
  grid-column-gap: 6px;
  grid-row-gap: 6px;
  grid-template-rows: repeat(3, 60px);
}
.detail-photo-grid img {
  height: 100%;
  width: 100%;
  object-fit: cover;
  border-radius: 8px;
  object-position: center;
}

.view-more {
  color: var(--theme-color);
  font-weight: 600;
  font-size: 15px;
  margin: 25px 0;
}

.follow-me {
  text-decoration: none;
  font-size: 14px;
  width: calc(100% + 60px);
  margin-left: -30px;
  display: flex;
  align-items: center;
  margin-top: auto;
  overflow: hidden;
  color: #9c9cab;
  padding: 0 20px;
  height: 52px;
  flex-shrink: 0;
  position: relative;
  justify-content: center;
}
.follow-me svg {
  width: 16px;
  height: 16px;
  margin-right: 8px;
}

.follow-text {
  display: flex;
  align-items: center;
  transition: 0.3s;
}

.follow-me:hover .follow-text {
  transform: translateY(100%);
}
.follow-me:hover .developer {
  top: 0;
}

.developer {
  position: absolute;
  color: var(--detail-font-color);
  font-weight: 600;
  left: 0;
  top: -100%;
  display: flex;
  transition: 0.3s;
  padding: 0 20px;
  align-items: center;
  justify-content: center;
  background-color: var(--developer-color);
  width: 100%;
  height: 100%;
}

.developer img {
  border-radius: 50%;
  width: 26px;
  height: 26px;
  object-fit: cover;
  margin-right: 10px;
}

.dark-mode .search-bar input,
.dark-mode .detail-area input {
  background-image: url("data:image/svg+xml;charset=UTF-8,%3csvg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 56.966 56.966' fill='%236f7073'%3e%3cpath d='M55.146 51.887L41.588 37.786A22.926 22.926 0 0046.984 23c0-12.682-10.318-23-23-23s-23 10.318-23 23 10.318 23 23 23c4.761 0 9.298-1.436 13.177-4.162l13.661 14.208c.571.593 1.339.92 2.162.92.779 0 1.518-.297 2.079-.837a3.004 3.004 0 00.083-4.242zM23.984 6c9.374 0 17 7.626 17 17s-7.626 17-17 17-17-7.626-17-17 7.626-17 17-17z'/%3e%3c/svg%3e");
}
.dark-mode .dark-light svg {
  fill: #ffce45;
  stroke: #ffce45;
}
.dark-mode .chat-area-group span {
  color: #d1d1d2;
}

.chat-area-group {
  flex-shrink: 0;
  display: flex;
}
.chat-area-group * {
  border: 2px solid var(--theme-bg-color);
}
.chat-area-group * + * {
  margin-left: -5px;
}
.chat-area-group span {
  width: 32px;
  height: 32px;
  background-color: var(--button-bg-color);
  color: var(--theme-color);
  border-radius: 50%;
  display: flex;
  justify-content: center;
  align-items: center;
  font-size: 14px;
  font-weight: 500;
}

@media (max-width: 1120px) {
  .detail-area {
    display: none;
  }
}
@media (max-width: 780px) {
  .conversation-area {
    display: none;
  }

  .search-bar {
    margin-left: 0;
    flex-grow: 1;
  }
  .search-bar input {
    padding-right: 10px;
  }
}

 </style>
 <script>
 const toggleButton = document.querySelector('.dark-light');
const colors = document.querySelectorAll('.color');

colors.forEach(color => {
  color.addEventListener('click', e => {
    colors.forEach(c => c.classList.remove('selected'));
    const theme = color.getAttribute('data-color');
    document.body.setAttribute('data-theme', theme);
    color.classList.add('selected');
  });
});

toggleButton.addEventListener('click', () => {
  document.body.classList.toggle('dark-mode');
});
 </script>
 <div class="breadcrumbs">
            <section class="container">
                <div class="row">
                    <div class="col-md-12">
                        <h1>Speak Up</h1>
                    </div>
                    <div class="col-md-12">
                        <div class="crumbs">
                            <a href="/">Home</a>
                            <span class="crumbs-span">/</span>
                            <a href="#">My Account</a>
                            
                        </div>
                   

                    </div>
                </div>
                <!-- End row -->
            </section>
            <!-- End container -->
        </div>
        <section class="container main-content">

<div class="row">
<div class="col-md-9">
    
    
    
    <div class="app">
 <div class="wrapper">
  <div class="conversation-area">
     <?php foreach($memberslist as $members):?> 
   <div class="msg online">
    <img class="msg-profile" src="<?php echo $members['User']['image'];?>" alt="" />
    <div class="msg-detail">
     <div class="msg-username"><?php echo $members['User']['username'];?></div>
     <div class="msg-content">
      <span class="msg-message"><?php echo $members['User']['email'];?></span>
     </div>
    </div>
   </div>
   <?php endforeach;?>
   <div class="msg">
    <img class="msg-profile" src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/3364143/download+%2812%29.png" alt="" />
    <div class="msg-detail">
     <div class="msg-username">Miguel Cohen</div>
     <div class="msg-content">
      <span class="msg-message">Adaptogen taiyaki austin jean shorts brunch</span>
      <span class="msg-date">20m</span>
     </div>
    </div>
   </div>
   <div class="msg active">
    <div class="msg-profile group">
     <svg viewBox="0 0 24 24" stroke="currentColor" stroke-width="2" fill="none" stroke-linecap="round" stroke-linejoin="round" class="css-i6dzq1">
      <path d="M12 2l10 6.5v7L12 22 2 15.5v-7L12 2zM12 22v-6.5" />
      <path d="M22 8.5l-10 7-10-7" />
      <path d="M2 15.5l10-7 10 7M12 2v6.5" /></svg>
    </div>
    <div class="msg-detail">
     <div class="msg-username">CodePen Group</div>
     <div class="msg-content">
      <span class="msg-message">Aysenur: I love CSS</span>
      <span class="msg-date">28m</span>
     </div>
    </div>
   </div>
   <div class="msg online">
    <img class="msg-profile" src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/3364143/download+%282%29.png" alt="" />
    <div class="msg-detail">
     <div class="msg-username">Lea Debere</div>
     <div class="msg-content">
      <span class="msg-message">Shoreditch iPhone jianbing</span>
      <span class="msg-date">45m</span>
     </div>
    </div>
   </div>
   <div class="msg online">
    <img class="msg-profile" src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/3364143/download+%281%29+%281%29.png" alt="" />
    <div class="msg-detail">
     <div class="msg-username">Jordan Smith</div>
     <div class="msg-content">
      <span class="msg-message">Snackwave craft beer raclette, beard kombucha </span>
      <span class="msg-date">2h</span>
     </div>
    </div>
   </div>
   <div class="msg">
    <img class="msg-profile" src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/3364143/download+%284%29+%281%29.png" alt="" />
    <div class="msg-detail">
     <div class="msg-username">Jared Jackson</div>
     <div class="msg-content">
      <span class="msg-message">Tattooed brooklyn typewriter gastropub</span>
      <span class="msg-date">18m</span>
     </div>
    </div>
   </div>
   <div class="msg online">
    <img class="msg-profile" src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/3364143/download+%283%29+%281%29.png" alt="">
    <div class="msg-detail">
     <div class="msg-username">Henry Clark</div>
     <div class="msg-content">
      <span class="msg-message">Ethical typewriter williamsburg lo-fi street art</span>
      <span class="msg-date">2h</span>
     </div>
    </div>
   </div>
   <div class="msg">
    <img class="msg-profile" src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/3364143/qs6F3dgm.png" alt="" />
    <div class="msg-detail">
     <div class="msg-username">Jason Mraz</div>
     <div class="msg-content">
      <span class="msg-message">I'm lucky I'm in love with my best friend</span>
      <span class="msg-date">4h</span>
     </div>
    </div>
   </div>
   <div class="msg">
    <img class="msg-profile" src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/3364143/download+%288%29.png" alt="" />
    <div class="msg-detail">
     <div class="msg-username">Chiwa Lauren</div>
     <div class="msg-content">
      <span class="msg-message">Pabst af 3 wolf moon</span>
      <span class="msg-date">28m</span>
     </div>
    </div>
   </div>
   <div class="msg">
    <img class="msg-profile" src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/3364143/download+%289%29.png" alt="" />
    <div class="msg-detail">
     <div class="msg-username">Caroline Orange</div>
     <div class="msg-content">
      <span class="msg-message">Bespoke aesthetic lyft woke cornhole</span>
      <span class="msg-date">35m</span>
     </div>
    </div>
   </div>
   <div class="msg">
    <img class="msg-profile" src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/3364143/download+%286%29.png" alt="" />
    <div class="msg-detail">
     <div class="msg-username">Lina Ashma</div>
     <div class="msg-content">
      <span class="msg-message">Migas food truck crucifix vexi</span>
      <span class="msg-date">42m</span>
     </div>
    </div>
   </div>
   <button class="add"></button>
   <div class="overlay"></div>
  </div>
  <div class="chat-area">
   <div class="chat-area-header">
    <div class="chat-area-title"><?php echo $group['Group']['group_name'];?> Group</div>
   </div>
   <div class="chat-area-main">
   
   
    
   </div>
   
   <div class="chat-area-footer">
  
 <form action="chats/add" style="width:100%;" method="post">
    <input type="hidden" name="user_id" value="<?php echo $data['User']['id'];?>">
     <input type="hidden" name="email" value="<?php echo $data['User']['email'];?>">
      <input type="hidden" name="image" value="<?php echo $data['User']['image'];?>">
      <input type="hidden" id="group_id" name="group_id" value="<?php echo $group['Group']['id'];?>">
      <input type="text" class="form-control" name="message" placeholder="Type your Message">
    </form>
   </div>
  </div>

 </div>
</div>
    
    
    
    
    
    
    
    
    </div>
    <aside class="col-md-3 sidebar">
           <div id="right-section-widgets.download-app-link-wdgt" class="naukri-wdgt download-app-link-wdgt naukri-js-wdgt" data-widget-name="download-app-link-wdgt" data-widget="{&quot;name&quot;:&quot;download-app-link-wdgt&quot;,&quot;version&quot;:&quot;v0&quot;,&quot;description&quot;:null,&quot;status&quot;:&quot;success&quot;,&quot;type&quot;:&quot;js&quot;,&quot;response&quot;:{&quot;js&quot;:&quot;http://naukri-static.cluster.infoedge.com/Static7p/0/common/j/download-app-link-wdgt_v0.min.js&quot;},&quot;ad&quot;:false,&quot;settings&quot;:{&quot;ttl&quot;:86401,&quot;isCachable&quot;:true},&quot;sectionName&quot;:&quot;right-section-widgets&quot;,&quot;widgetName&quot;:&quot;download-app-link-wdgt&quot;,&quot;widgetSequence&quot;:1,&quot;id&quot;:&quot;right-section-widgets.download-app-link-wdgt&quot;}">
    <div class="wdgt-header">
        <h3 class="wdgt-title">Add Group Members</h3>
    </div>
       <form action="chats/addmembers" id="onpageContactForm2" class="wdgt-form" method="post">
						
		  <p id="successmsg"></p>
       <input class="wdgt-input" name="user_id" type="hidden" value="<?php echo $data['User']['id'];?>">
       <input class="wdgt-input" name="group_id" type="hidden" value="<?php echo $group['Group']['id'];?>">
         <input class="wdgt-input" name="group_name" type="hidden" value="<?php echo $group['Group']['group_name'];?>">
       <input class="wdgt-input" type="email" placeholder="Enter Email Id" id="members" name="members" autocomplete="off">
       
       
        
        <p class="wdgt-form-action-status"> Error </p>
        <input name="submit" type="submit" class="wdgt-form-btn" title="Add Member" value="Add Member">
    </form>
   
   
</div>
                 <div class="widget widget_tag_cloud">
                        <h3 class="widget_title">Group Members</h3>
                        <?php 
                         $mark=explode(',', $group['Group']['members']);
   $i=1;foreach($mark as $out) {
      echo "<a class='color".$i."' >$out</a><br>";
  $i++; }
                         ?>
						                        
                                             
                                          </div>  
                                          
                                          </aside>
    </div>
    </section>
    <?php //echo $this->element('sql_dump'); ?>
    <script>
    setInterval(function(){get_fb();}, 100);

    function get_fb(){
        
                 
   var element    = $(this); 
         var group_id=$( "input#group_id" ).val();
           $.ajax({
        type: 'post',
        url: '<?php echo Router::url(array('controller' => 'chats', 'action' => 'getchat')); ?>',
        data: 'group_id='+group_id,
        async: false,	
		dataType:"html",
        success: function(data) {
           a

	//	var data=data['Chat']['message'];
		$('div.chat-area-main').html(data);
		}
              ,
        error: function(a, b, c){
            console.log(a);
            console.log(b);
            console.log(c);
        }
    });
       
}
    </script>