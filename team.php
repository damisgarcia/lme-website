<div class="team-popup-container">
  <div id="team-popup" class="gallery-content darken mfp-with-anim mfp-hide">
    <div>
      <div class='team-label'>Nosso Time</div>
      <div id="members" class='hidden invisible'>
        <!-- List 1 -->
        <div ng-repeat="group in app.members">
          <div class="member" ng-repeat="m in group">
            <div class="member-container">
              <img ng-src="{{m.image}}" class='img-responsive'/>
              <div class="member-body">
                <div class='title'>{{m.name}}</div>
                <div class="caption">{{m.profission}}</div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
