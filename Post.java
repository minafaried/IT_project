import java.io.File;

public class Post {
	int numOfLikes;
	User[] users;
	int numOfComments;
	String[] userComments;
	int numOfShares;
	User[] userShares;
	String content;
	File file; // audio, image, text, video
	int postId;

	public int getNumOfLikes() {
		return numOfLikes;
	}

	public User[] getUsers() {
		return users;
	}

	public int getNumOfComments() {
		return numOfComments;
	}

	public String[] getUserComments() {
		return userComments;
	}

	public int getNumOfShares() {
		return numOfShares;
	}

	public User[] getUserShares() {
		return userShares;
	}

	public String getContent() {
		return content;
	}

	public int getPostId() {
		return postId;
	}

	public void setNumOfLikes(int numOfLikes) {
		this.numOfLikes = numOfLikes;
	}

	public void setUsers(User[] users) {
		this.users = users;
	}

	public void setNumOfComments(int numOfComments) {
		this.numOfComments = numOfComments;
	}

	public void setUserComments(String[] userComments) {
		this.userComments = userComments;
	}

	public void setNumOfShares(int numOfShares) {
		this.numOfShares = numOfShares;
	}

	public void setUserShares(User[] userShares) {
		this.userShares = userShares;
	}

	public void setContent(String content) {
		this.content = content;
	}

	public void setPostId(int postId) {
		this.postId = postId;
	}
	
	public void likePost(User user) {
		
	}
	
	public void comment(String comm, User user) {
		
	}
	
	public void share(User user) {
		
	}
	
	public void uploadFile(File file) {
		
	}
	
	public void tag(User user, User userTagged) {
		
	}
	
	public void addContent(String content) {
		
	}
	
	public File getFile() {
		return file;
	}
}
