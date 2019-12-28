
public class Group {
	String name;
	User admins;
	int numberOfMemebers;
	String groupInfo;

	public String getGroupInfo() {
		return groupInfo;
	}

	public void setGroupInfo(String groupInfo) {
		this.groupInfo = groupInfo;
	}

	public String getName() {
		return name;
	}

	public int getNumberOfMemebers() {
		return numberOfMemebers;
	}

	public void setName(String name) {
		this.name = name;
	}

	public void setAdmins(User admins) {
		this.admins = admins;
	}

	public void setNumberOfMemebers(int numberOfMemebers) {
		this.numberOfMemebers = numberOfMemebers;
	}

	public User getAdmins() {
		return admins;
	}

}
