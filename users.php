
    <div class="user-container">
      <form class="form-user" id="u-search">
        <select name="by" id="by" class="s-user-by">
          <option value="*">SEARCH BY</option>
          <option value="username">USERNAME</option>
          <option value="email">EMAIL</option>
          <option value="phone">PHONE</option>
        </select>
        <input
          type="text"
          placeholder="ENTER SEARCH TERM"
          class="s-user-term"
          id="term"
        />

        <button type="submit" class="s-user-submit" id="s-user">SEARCH</button>
      </form>
      <div class="search-output" id="search-output"></div>
      <div class="stat">
        <span class="stat-v"> NO OF USERS:</span>
        <span class="stat-v"> VERIFIED ACCOUNT:</span>
        <span class="stat-v">ADMINS:</span>
        <span class="stat-v"> SUPER ADMINS: </span>
        <span class="stat-v"> MANAGERS: </span>
      </div>
    </div>
