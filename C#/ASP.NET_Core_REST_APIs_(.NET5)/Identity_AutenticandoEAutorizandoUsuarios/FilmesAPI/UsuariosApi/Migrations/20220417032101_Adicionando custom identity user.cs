using System;
using Microsoft.EntityFrameworkCore.Migrations;

namespace UsuariosApi.Migrations
{
    public partial class Adicionandocustomidentityuser : Migration
    {
        protected override void Up(MigrationBuilder migrationBuilder)
        {
            migrationBuilder.AddColumn<DateTime>(
                name: "DataDeNascimento",
                table: "AspNetUsers",
                type: "datetime",
                nullable: false,
                defaultValue: new DateTime(1, 1, 1, 0, 0, 0, 0, DateTimeKind.Unspecified));

            migrationBuilder.UpdateData(
                table: "AspNetRoles",
                keyColumn: "Id",
                keyValue: 99997,
                column: "ConcurrencyStamp",
                value: "f6ab9de9-f305-45a8-9ef3-d18fc8712a8b");

            migrationBuilder.UpdateData(
                table: "AspNetRoles",
                keyColumn: "Id",
                keyValue: 99999,
                column: "ConcurrencyStamp",
                value: "7ee77b7d-4418-4fd1-9864-6af607932e72");

            migrationBuilder.UpdateData(
                table: "AspNetUsers",
                keyColumn: "Id",
                keyValue: 99999,
                columns: new[] { "ConcurrencyStamp", "PasswordHash", "SecurityStamp" },
                values: new object[] { "c9d835f8-e618-4b1d-884d-eb6b0e162d69", "AQAAAAEAACcQAAAAEKtBmRuLAhjwR5SFBMrCxqcIKFTzQstua2LRxIfMxVVQIS/3/zrZSPIXeWZVTf10sQ==", "a2d3f75a-5261-4bd3-8c4d-8c2181b30baa" });
        }

        protected override void Down(MigrationBuilder migrationBuilder)
        {
            migrationBuilder.DropColumn(
                name: "DataDeNascimento",
                table: "AspNetUsers");

            migrationBuilder.UpdateData(
                table: "AspNetRoles",
                keyColumn: "Id",
                keyValue: 99997,
                column: "ConcurrencyStamp",
                value: "52bc4e9a-813e-4927-b6b9-630bf123501d");

            migrationBuilder.UpdateData(
                table: "AspNetRoles",
                keyColumn: "Id",
                keyValue: 99999,
                column: "ConcurrencyStamp",
                value: "f1967f2a-b7e9-42a4-9d9c-6102b5c528bd");

            migrationBuilder.UpdateData(
                table: "AspNetUsers",
                keyColumn: "Id",
                keyValue: 99999,
                columns: new[] { "ConcurrencyStamp", "PasswordHash", "SecurityStamp" },
                values: new object[] { "9fb16fec-6063-443e-bf0a-41b52190dedf", "AQAAAAEAACcQAAAAENmhMOLVXRXP+KowzbXYxrDiW0Y/kIniztaAK40cpuSD5jBTKS4mHQpj/fPkNl8b8A==", "44bdf8a6-42c8-4ce7-b519-ddb20c91b3a1" });
        }
    }
}
